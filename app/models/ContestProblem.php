<?php

class ContestProblem extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contest_problems';

    /**
     *
     * @var boolean
     */
    public $timestamps  = false;
    
    public $order_id;
    
    
    /**
     * Get contest's problems by cid
     *
     * @return mixed
     */
    public static function getProblemsByCID($cid)
    {
        $problems = ContestProblem::whereRaw('contest_id = ?', [$cid])->orderBy('order')->get();
        foreach ($problems as $problem)
            $problem->order_id = chr(ord('A') + $problem->order);
        return $problems;
    }
}