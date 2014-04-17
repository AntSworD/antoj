<?php

function cmp_standing($a, $b)
{
    if ($a->solved != $b->solved)
        return $a->solved < $b->solved;
    else
        return $a->penalty > $b->penalty;
}

class Standing {

    public $user_id;
    public $solved;
    public $penalty;
    public $nick;
    public $pro_nac;
    public $pro_ac;
    
    function Standing()
    {
        $this->solved   = 0;
        $this->penalty  = 0;
        $this->pro_nac  = array(0);
        $this->pro_ac   = array(0);
    }
    
    public function calc_penalty($pid, $n_penalty, $res)
    {
        if (isset($this->pro_ac[$pid]) && $this->pro_ac[$pid]>0)
            return;
        if ($res!=4){
            if(isset($this->pro_nac[$pid])){
                $this->pro_nac[$pid]++;
            }else{
                $this->pro_nac[$pid]=1;
            }
        }else{
            $this->pro_ac[$pid]=$n_penalty;
            $this->solved++;
            if(!isset($this->pro_nac[$pid])) $this->pro_nac[$pid]=0;
            $this->penalty+=$n_penalty+$this->pro_nac[$pid]*1200;
        }
    }
    
    public static function getStanding($cid)
    {
        $start_time = DB::select('SELECT start_time FROM contests WHERE contest_id=?', [$cid])[0]->start_time;
        $result = DB::select('SELECT
            users.user_id, users.nick, solutions.result, solutions.contest_order, solutions.submit_date
                FROM
                (SELECT * FROM solutions WHERE solutions.contest_id=? and contest_order>=0) solutions
                LEFT JOIN users
                ON users.user_id=solutions.user_id
            ORDER BY users.user_id, submit_date', [$cid]);
        $user_num = 0;
        $user_id = '';
        $standing = array();
        foreach ($result as $s)
        {
            $n_user = $s->user_id;
            if (strcmp($user_id, $n_user))
            {
                $user_num ++;
                $standing[$user_num] = new Standing();
                $standing[$user_num]->user_id = $n_user;
                $standing[$user_num]->nick = $s->nick;
                
                $user_id = $n_user;
            }
            $standing[$user_num]->calc_penalty($s->contest_order, strtotime($s->submit_date) - $start_time, intval($s->result));
        }
        usort($standing, "cmp_standing");
        return $standing;
    }
}