<?php

class Problem extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'problems';

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
    public function getProblemById($pid)
    {
        $problem = Problem::where('problem_id', '=', $pid)->first();
        return $problem;
    }
}