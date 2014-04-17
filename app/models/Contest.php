<?php

class Contest extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'contests';

    /**
     *
     * @var boolean
     */
    public $timestamps  = false;
    
    public $type;
    public $status;
    
    /**
     * Get the Contest List
     *
     * @return mixed
     */
    public static function getContestList()
    {
        $contests = Contest::where('hide', '=', 'N')->orderBy('contest_id', 'desc')->paginate(20);
        foreach ($contests as $contest) {
            if ($contest->private == 0)
                $contest->type = 'Public';
            else
                $contest->type = 'Private';
            $start_time = strtotime($contest->start_time);
            $end_time = strtotime($contest->end_time);
            $now = time();
            if ($now < $start_time)
                $contest->status = 'Pending';
            elseif ($now > $end_time)
                $contest->status = 'Ended';
            else
                $contest->status = 'Runing';
        }
        return $contests;
    }
    
    /**
     * Get contest by id
     *
     * @return mixed
     */
    public static function getContestByCID($cid)
    {
        $contest = Contest::whereRaw('contest_id = ? AND hide = ?', [$cid, 'N'])->first();
        if ($contest->private == 0)
            $contest->type = 'Public';
        else
            $contest->type = 'Private';
        $start_time = strtotime($contest->start_time);
        $end_time = strtotime($contest->end_time);
        $now = time();
        if ($now < $start_time)
            $contest->status = 'Pending';
        elseif ($now > $end_time)
            $contest->status = 'Ended';
        else
            $contest->status = 'Runing';
        return $contest;
    }

    // /**
    //  * Get the unique identifier for the user.
    //  *
    //  * @return mixed
    //  */
    // public function getProblemById($pid)
    // {
    //     $problem = Problem::where('problem_id', '=', $pid)->first();
    //     return $problem;
    // }
}