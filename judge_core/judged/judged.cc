#include <time.h>
#include <stdio.h>
#include <string.h>
#include <ctype.h>
#include <stdlib.h>
#include <unistd.h>
#include <syslog.h>
#include <errno.h>
#include <fcntl.h>
#include <stdarg.h>
#include <mysql/mysql.h>
#include <sys/wait.h>
#include <sys/stat.h>
#include <signal.h>
#include <sys/resource.h>

#define OJ_WT0 0
#define OJ_WT1 1
#define OJ_CI 2
#define OJ_RI 3
#define OJ_AC 4
#define OJ_PE 5
#define OJ_WA 6
#define OJ_RE 7
#define OJ_TL 8
#define OJ_ML 9
#define OJ_OL 10
#define OJ_CE 11
#define OJ_CO 12

#define BUFFER_SIZE 1024
#define LOCKFILE "/var/run/judged.pid"
#define LOCKMODE (S_IRUSR|S_IWUSR|S_IRGRP|S_IROTH)
#define STD_MB 1048576

static char oj_home[BUFFER_SIZE];
static char host_name[BUFFER_SIZE];
static char user_name[BUFFER_SIZE];
static char password [BUFFER_SIZE];
static char db_name  [BUFFER_SIZE];
static char oj_lang_set  [BUFFER_SIZE];
static int port_number;
static int max_running;
static int sleep_time;
static int sleep_tmp;
static int oj_tot;
static int oj_mod;

static char query[BUFFER_SIZE];
static MYSQL *conn;
static MYSQL_RES *res;
static MYSQL_ROW row;

static bool STOP = false;

int executesql(const char * sql)
{
	if (mysql_real_query(conn,sql,strlen(sql)))
	{
		sleep(20);
		conn = NULL;
		return 1;
	}
	else
	  return 0;
}

int init_mysql(void)
{
	if (conn==NULL)
	{
		conn = mysql_init(NULL); // 初始化MYSQL结构
		/* 连接数据库 */
		const char timeout = 30;
		
		//设置数据库连接超时时间，单位秒
		mysql_options(conn,MYSQL_OPT_CONNECT_TIMEOUT, &timeout);

		if (!mysql_real_connect(conn, host_name,user_name, password, db_name, port_number, 0, 0))
		{
			sleep(2);
			return 1;
		}
		else
		{
			return 0;
		}
	}
	else
	{
		return executesql("set names utf8");
	}
}

void call_for_exit(int s)
{
   STOP = true;
   printf("Stopping judged...\n");
}

int after_equal(char * c)
{
	int i=0;
	for(;c[i]!='\0'&&c[i]!='=';i++);
	return ++i;
}

void trim(char * c)
{
    char buf[BUFFER_SIZE];
    char * start,*end;
    strcpy(buf,c);
    start=buf;
    while(isspace(*start)) start++;
    end=start;
    while(!isspace(*end)) end++;
    *end='\0';
    strcpy(c,start);
}

bool read_buf(char * buf, const char * key, char * value)
{
   if (strncmp(buf,key, strlen(key)) == 0) {
		strcpy(value, buf + after_equal(buf));
		trim(value);
		return 1;
   }
   return 0;
}

void read_int(char * buf,const char * key,int * value)
{
	char buf2[BUFFER_SIZE];
	if (read_buf(buf,key,buf2))
		sscanf(buf2, "%d", value);
}

void mysql_conf_init()
{
	FILE *fp = NULL;
	char buf[BUFFER_SIZE];
	host_name[0] 	= 0;
	user_name[0] 	= 0;
	password[0] 	= 0;
	db_name[0]		= 0;
	port_number		= 3306;
	max_running		= 3;
	sleep_time		= 1;
	oj_tot 			= 1;
	oj_mod			= 0;
	strcpy(oj_lang_set, "0,1,2,3");
	fp = fopen("./etc/judge.conf", "r");
	if (fp != NULL)
	{
		while (fgets(buf, BUFFER_SIZE - 1, fp))
		{
			read_buf(buf,"OJ_HOST_NAME", host_name);
			read_buf(buf, "OJ_USER_NAME", user_name);
			read_buf(buf, "OJ_PASSWORD", password);
			read_buf(buf, "OJ_DB_NAME", db_name);
			read_int(buf , "OJ_PORT_NUMBER", &port_number);
			read_int(buf, "OJ_RUNNING", &max_running);
			read_int(buf, "OJ_SLEEP_TIME", &sleep_time);
			read_int(buf , "OJ_TOTAL", &oj_tot);

			read_int(buf,"OJ_MOD", &oj_mod);

			read_buf(buf,"OJ_LANG_SET", oj_lang_set);
		}
		sprintf(query,"SELECT solution_id FROM solutions WHERE language in (%s) and result<2 and MOD(solution_id, %d)=%d ORDER BY result ASC,solution_id ASC LIMIT %d",
			oj_lang_set, oj_tot, oj_mod, max_running*2);
		sleep_tmp=sleep_time;
	}
}

int  get_jobs(int * jobs)
{
        if (mysql_real_query(conn,query,strlen(query))){
                sleep(20);
                return 0;
        }
        res = mysql_store_result(conn);
        int i = 0;
        int ret = 0;
        while((row = mysql_fetch_row(res))!=NULL){
                jobs[i++] = atoi(row[0]);
        }
        ret = i;
        while(i <= max_running*2) jobs[i++]=0;
        return ret;
}

bool check_out(int solution_id,int result)
{
	char sql[BUFFER_SIZE];
	sprintf(sql,"UPDATE solutions SET result=%d,exe_time=0,exe_memory=0,judge_time=NOW() WHERE solution_id=%d and result<2 LIMIT 1"
			,result,solution_id);
	if (mysql_real_query(conn,sql,strlen(sql)))
	{
		syslog(LOG_ERR | LOG_DAEMON, "%s",mysql_error(conn));
		return false;
	}
	else
	{
		if(mysql_affected_rows(conn)>0ul)
			return true;
		else
			return false;
	}

}

void run_client(int runid,int clientid)
{
	char buf[BUFFER_SIZE], runidstr[BUFFER_SIZE];
	struct rlimit LIM;
	LIM.rlim_max=800;
	LIM.rlim_cur=800;
	setrlimit(RLIMIT_CPU,&LIM);

	LIM.rlim_max=80*STD_MB;
	LIM.rlim_cur=80*STD_MB;
	setrlimit(RLIMIT_FSIZE,&LIM);

	LIM.rlim_max=STD_MB<<11;
	LIM.rlim_cur=STD_MB<<11;
	setrlimit(RLIMIT_AS,&LIM);

	LIM.rlim_cur=LIM.rlim_max=200;
	setrlimit(RLIMIT_NPROC, &LIM);

	sprintf(runidstr,"%d",runid);
	sprintf(buf,"%d",clientid);

	execl("/usr/bin/judge_client","/usr/bin/judge_client",runidstr,buf,oj_home,(char *)NULL);


	//exit(0);
}

int work(void)
{
	static int retcnt = 0;
	int i = 0;
	static pid_t ID[100]; //100大小的pid数组
	static int workcnt = 0;
	int runid = 0;
	int jobs[max_running * 2 + 1]; //max_running为启动judge的上限
	pid_t tmp_pid = 0;
	
	// 检索出未judge的solution_id，存在jobs[]中。retcnt 为这些solution_id的数量。
	if(!get_jobs(jobs))
		retcnt = 0;
	// 运行提交
	for (int j = 0; jobs[j] > 0; ++ j)
	{
		runid = jobs[j];
		if (runid % oj_tot != oj_mod)
			continue;
		if (workcnt >= max_running) //如果judge到上限
		{
			tmp_pid = waitpid(-1, NULL, 0); //等待一个子进程退出
			workcnt --;
			retcnt ++;
			for (i = 0; i < max_running; ++ i) //获取子进程ID
				if (ID[i] == tmp_pid)
					break;
			ID[i] = 0;
		}
		else //有空闲子进程
		{
			for (i = 0; i < max_running; ++ i)
				if (ID[i] == 0)
					break;
		}
		if (workcnt < max_running && check_out(runid, OJ_CI))
		{
			workcnt ++;
			ID[i] = fork();
			if (ID[i] == 0)
			{
				run_client(runid, i);
				exit(0);
			}
		}
		else
		{
			ID[i] = 0;
		}
	}
	//回收运行完的进程号
	while ((tmp_pid = waitpid(-1,NULL,WNOHANG)) > 0)
	{
		workcnt--;retcnt++;
		for (i=0;i<max_running;i++)
			if (ID[i] == tmp_pid)
				break;
		ID[i] = 0;
		printf("tmp_pid = %d\n",tmp_pid);
	}
	mysql_free_result(res);
	executesql("commit");
	return retcnt;
}

//对整个文件加锁
int lockfile(int fd)  
{  
    struct flock fk;  
    fk.l_type = F_WRLCK;  
    fk.l_start = 0;  
    fk.l_whence = SEEK_SET;  
    fk.l_len = 0;  
    return (fcntl(fd, F_SETLK, &fk));  
} 

int already_running(void)
{
	int fd;
	char buf[16];
	//以只读方式打开锁定文件，如不存在则新建，所有者拥有读写权限，群组和其他则有读权限
	fd = open(LOCKFILE, O_RDWR|O_CREAT, LOCKMODE);
	if (fd < 0)
	{
		syslog(LOG_ERR|LOG_DAEMON, "Can't open %s: %s!\n", LOCKFILE, strerror(errno));
		exit(1);
	}
	if (lockfile(fd) < 0)
	{
		if (errno == EACCES || errno == EAGAIN)
		{
			close(fd);
			return 1;
		}
		syslog(LOG_ERR|LOG_DAEMON, "Can't lock %s: %s!\n", LOCKFILE, strerror(errno));
		exit(1);
	}
	ftruncate(fd, 0);  
	sprintf(buf, "%ld", (long)getpid());  
	write(fd, buf, strlen(buf) + 1);  
	return 0; 
}

int daemon_init(void)
{
	//1. 创建子进程后结束父进程
	pid_t pid;
	if (pid = fork() < 0)
		return (-1);
	else if (pid != 0)
		exit(0);
	
	//2. 在子进程中建立新的领头会话
	setsid();
	
	//3. 修改工作目录和权限掩码信息
	chdir(oj_home);
	umask(0); //清除权限掩码
	
	//4. 关闭文件描述符0、1和2
	close(0); //关闭标准输入文件描述符
	close(1); //关闭标准输出文件描述符
	close(2); //关闭标准错误输出文件描述符
	
	return (0);
}

//主函数
int main(int argc, char** argv)
{
	if (argc > 1)
		strcpy(oj_home, argv[1]);
	else
		strcpy(oj_home, "/home/judge");
	chdir(oj_home); //change the work path
	
	//初始化守护进程
	daemon_init();
	
	if(strcmp(oj_home, "/home/judge") == 0 && already_running())
	{
		syslog(LOG_ERR|LOG_DAEMON, "This daemon program is already running!\n");
		return 1;
	}
	
	//初始化mysql数据库信息
	mysql_conf_init();
	signal(SIGQUIT, call_for_exit); // 输入Quit Key的时候（CTRL+\）发送给所有Foreground Group的进程  
	signal(SIGKILL, call_for_exit); // 无法处理和忽略。中止某个进程  
	signal(SIGTERM, call_for_exit); // 请求中止进程，kill命令缺省发送
	
	int j=1;
	while (1){			// start to run
	    while(j && !init_mysql()){ 
			    j = work();
		}
		sleep(sleep_time); // judged 通过轮询数据库发现新任务，轮询间隔的休息时间，单位秒
		j=1;
	}
	return 0;
}