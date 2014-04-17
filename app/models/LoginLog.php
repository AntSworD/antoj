<?php

class LoginLog extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'login_log';

	/**
	 *
	 * @var boolean
	 */
	public $timestamps  = false;

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	/*public function getAuthIdentifier()
	{
		return $this->getKey();
	}
*/
	
	/**
	 * save the login log.
	 *
	 * @return mixed
	 */
	public function saveLoginlog()
	{
		return $this->save();
	}
	
	/**
	 * get last login time by uid.
	 *
	 * @return datetime
	 */
	public static function getLastLog($uid)
	{
		return LoginLog::where('user_id', '=', $uid)->orderBy('login_time', 'desc')->first()->login_time;
	}
}