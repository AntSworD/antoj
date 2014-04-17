<?php

class SourceCode extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'source_code';
	
	/**
	 *
	 * @var string
	 */
	protected $primaryKey = 'solution_id';

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