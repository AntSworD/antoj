<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The primary key of the database table.
	 *
	 * @var string
	 */
	protected $primaryKey = 'user_id';
	/**
	 *
	 * @var boolean
	 */
	public $incrementing = false;

	/**
	 *
	 * @var boolean
	 */
	public $timestamps  = false;

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');
	
	protected $guarded = [];
	
	
    public $last_login;
    public $pro_solved;
    public $pro_submit;
    public $solved_problem_list;
    public $unsolved_problem_list;
    public $rank;

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	/**
	 * get the user rating
	 *
	 * @return paginate
	 */
	public function getRating()
	{
		return $this->where('submit', '>', 0)
			   ->select('user_id', 'submit', 'solved', 'nick', 'motto')
			   ->orderBy('solved', 'desc')->orderBy('submit', 'desc')
			   ->paginate(50);
	}
	
	/**
	 * get the user detail
	 *
	 * @return user
	 */
	public function getDetailById($uid)
	{
		$user = new User;
		$user = $user->find($uid);
		$user->rank = User::whereRaw('solved > ?', [$user->solved])->count() + 1;
		$user->last_login = LoginLog::getLastLog($uid);
		$user->pro_solved = Solution::getProSolved($uid);
		$user->pro_submit = Solution::getProUnsolved($uid);
		$user->solved_problem_list = Solution::getSolvedList($uid);
		$user->unsolved_problem_list = Solution::getUnsolvedList($uid);
		return $user;
	}
}