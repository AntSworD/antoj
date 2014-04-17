<?php

class Privilege extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'privilege';

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
}