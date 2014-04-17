<?php

Config::get('get_ip.php');

class UserController extends BaseController
{

    /**
    * Login the user.
    *
    * @return null
    */
    static function login($user, $rem_me = false)
    {
        Auth::attempt(array('user_id' => $user->user_id, 'password' => $user->password), $rem_me);
        $login_log = new LoginLog;
        $login_log->user_id     = $user->user_id;
        $login_log->password    = Hash::make($user->password);
        $login_log->login_ip    = $user->reg_ip;
        $login_log->login_time  = $user->reg_time;
        $login_log->saveLoginLog();
        Session::put('user_id', $user->user_id);
    }
    
    /**
     * get the Login page
     *
     * @return View
     */
    public function getLogin()
    {
        return View::make('user.login')->with('title', 'Login');
    }

    /**
     * 页面：注册
     * @return Response
     */
    public function getRegister()
    {
        return View::make('user.register')->with('title', 'Register');
    }
    
    /**
     * 动作：注册
     * @return Response
     */
    public function postRegister()
    {
        // 获取所有注册数据
        $reg_data = Input::all();
        // 创建验证规则
        /*$rule = array(
            'uid'       => 'required|alpha_num|unique:users,user_id|digits_between:3, 15',
            'nick'      => 'digits_between:0, 10',
            'password'  => 'required|alpha_|digits_between:6, 20|confirmed',
            'school'    => 'digits_between:0, 30',
            'email'     => 'required|email|unique:users,email',
            );*/
        $user = new User;
        $user->user_id      = Input::get('uid');
        $user->email        = Input::get('email');
        $user->password     = Hash::make(Input::get('password'));
        $user->reg_ip       = get_ip();
        $user->reg_time     = date("Y-m-d H:i:s",time());
        $user->nick = Input::get('nick', $user->user_id);
        $user->motto = Input::get('motto');
        $user->school = Input::get('school', null);
        if($user->save())
        {
            $privilege = new Privilege;
            $privilege->user_id = $user->user_id;
            $privilege->group   = 'user';
            $privilege->save();
            UserController::login($user);
            return Redirect::route('registerSuccess', $user->user_id);
        }
    }
    /**
     * 页面：注册成功
     * @param  string $uid 用户ID
     * @return Response
     */
    public function getRegisterSuccess($uid)
    {
        // 确认是否存在此账号
        $checkUserid = User::whereRaw('user_id = ?', array($uid))->first();
        // 数据库中无此账号，抛出404
        if(is_null($checkUserid)) 
            App::abort(404);
        // 提示激活
        return View::make('user.reg_success')->with('uid', $uid)->with('title', 'Register Success - Ant OJ');
    }
    
    /**
     * 动作：注销
     * @return Response
     */
    public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return Redirect::to('/');
    }
    
    /**
     * 动作：登录
     * @return Response
     */
    public function postLogin()
    {
        // 获取所有注册数据
        $reg_data = Input::all();
        // 创建验证规则
        /*$rule = array(
            'uid'       => 'required|alpha_num|unique:users,user_id|digits_between:3, 15',
            'nick'      => 'digits_between:0, 10',
            'password'  => 'required|alpha_|digits_between:6, 20|confirmed',
            'school'    => 'digits_between:0, 30',
            'email'     => 'required|email|unique:users,email',
            );*/
        $user = new User;
        $user->user_id      = Input::get('uid');
        $user->password     = Input::get('password');
        $rem_me             = Input::get('rem_me', false);
        if ($rem_me == '1') {
            $rem_me = true;
        }
        $user->reg_ip       = get_ip();
        $user->reg_time     = date("Y-m-d H:i:s",time());
        UserController::login($user, $rem_me);
        return Redirect::to('/');
    }
    
    /**
     * get the Rating page
     *
     * @return Response
     */
    public function getRating()
    {
        $users = new User;
        $users = $users->getRating();
        return View::make('user.rating', ['users' => $users]);
    }
    
    /**
     * Get the profile by uid
     *
     * @return Response
     */
    public function getProfile($uid)
    {
        $user = new User;
        $user = $user->getDetailById($uid);
        return View::make('user.profile', ['user' => $user]);
    }
}