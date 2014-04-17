<?php

/**
* The class of solutions
*/
class Solutions
{
    public $submit     = 0;
    public $user_acc   = 0;
    public $accept     = 0;
    public $pe         = 0;
    public $wa         = 0;
    public $tle        = 0;
    public $mle        = 0;
    public $ole        = 0;
    public $ce         = 0;
    public $re         = 0;
    public $solutions  = array();
}

class Solution extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'solutions';

    /**
     *
     * @var boolean
     */
    public $timestamps  = false;
    
    /**
     *
     * @var array
     */
    protected $guarded = [];
    
    /**
     *
     * @var string
     */
    protected $primaryKey = 'solution_id';
    
    const STATUS_PENDING         = 0;
    const STATUS_PENDING_REJUDGE = 1;
    const STATUS_COMPILING       = 2;
    const STATUS_RUNING_JUDGIN   = 3;
    const STATUS_AC              = 4;
    const STATUS_PE              = 5;
    const STATUS_WA              = 6;
    const STATUS_RE              = 7;
    const STATUS_TLE             = 8;
    const STATUS_MLE             = 9;
    const STATUS_OLE             = 10;
    const STATUS_CE              = 11;
    const STATUS_SYSTEM_ERROR    = 12;
    const STATUS_OUT_CONTEST     = 13;

    public static $status = array(
            4  => "Accepted",
            5  => "Presentation Error",
            6  => "Wrong Answer",
            7  => "Runtime Error",
            8  => "Time Limit Exceed",
            9  => "Memory Limit Exceed",
            10  => "Output Limit Exceed",
            11 => "Compile Error",
            12 => "System Error",
            13 => "Out of Contest Time",
            0  => "Pending",
            1  => "Pending Rejudging",
            2  => "Compiling",
            3  => "Running &amp; Judging"
        );
    public static $lan = array(
            0  => "C",
            1  => "C++",
            2  => "JAVA"
        );

    /**
     * Get the Status
     *
     * @return QUERY
     */
    public function findStatus($query)
    {
        return $this->whereRaw($query)->orderBy('solution_id', 'desc')->paginate(100);
    }
    
    /**
     * Get the solutions by user_id and problem_id.
     *
     * @return QUERY
     */
    static function getSolutionsByUPid($uid, $pid)
    {
        return Solution::where('user_id', '=', $uid)->where('problem_id', '=', $pid)->get();
    }
    
    /**
     * Get the submit number by problem_id.
     *
     * @return QUERY
     */
    static function getSubmitNumByPid($pid)
    {
        return Solution::where('problem_id', '=', $pid)->count();
    }
    
    /**
     * Get the solved number by problem_id.
     *
     * @return int
     */
    static function getSolvedNumByPid($pid)
    {
        return Solution::where('problem_id', '=', $pid)->where('result', '=', '4')->count();
    }
    
    /**
     * Get the number of user has accept by problem_id.
     *
     * @return int
     */
    static function getUserAccNumByPid($pid)
    {
        return Solution::where('problem_id', '=', $pid)->where('result', '=', '4')->select(['user_id'])->distinct()->count();
    }
    
    /**
     * Get the number of Pe solution by problem_id.
     *
     * @return int
     */
    static function getPeNumByPid($pid)
    {
        return Solution::where('problem_id', '=', $pid)->where('result', '=', '5')->count();
    }
    
    /**
     * Get the number of Wa solution by problem_id.
     *
     * @return int
     */
    static function getWaNumByPid($pid)
    {
        return Solution::where('problem_id', '=', $pid)->where('result', '=', '6')->count();
    }
    
    /**
     * Get the number of Tle solution by problem_id.
     *
     * @return int
     */
    static function getTleNumByPid($pid)
    {
        return Solution::where('problem_id', '=', $pid)->where('result', '=', '8')->count();
    }
    
    /**
     * Get the number of Mle solution by problem_id.
     *
     * @return int
     */
    static function getMleNumByPid($pid)
    {
        return Solution::where('problem_id', '=', $pid)->where('result', '=', '9')->count();
    }
    
    /**
     * Get the number of Ole solution by problem_id.
     *
     * @return int
     */
    static function getOleNumByPid($pid)
    {
        return Solution::where('problem_id', '=', $pid)->where('result', '=', '10')->count();
    }
    
    /**
     * Get the number of Ce solution by problem_id.
     *
     * @return int
     */
    static function getCeNumByPid($pid)
    {
        return Solution::where('problem_id', '=', $pid)->where('result', '=', '11')->count();
    }
    
    /**
     * Get the number of Re solution by problem_id.
     *
     * @return int
     */
    static function getReNumByPid($pid)
    {
        return Solution::where('problem_id', '=', $pid)->where('result', '=', '7')->count();
    }
    
    /**
     * Get the accept solutions by problem id.
     *
     * @return Solutions
     */
    static function getAccSolutionsByPid($pid)
    {
        $solutions = new Solutions;
        $solutions->submit     = Solution::getSubmitNumByPid($pid);
        $solutions->user_acc   = Solution::getUserAccNumByPid($pid);
        $solutions->accept     = Solution::getSolvedNumByPid($pid);
        $solutions->pe         = Solution::getPeNumByPid($pid);
        $solutions->wa         = Solution::getWaNumByPid($pid);
        $solutions->tle        = Solution::getTleNumByPid($pid);
        $solutions->mle        = Solution::getMleNumByPid($pid);
        $solutions->ole        = Solution::getOleNumByPid($pid);
        $solutions->ce         = Solution::getCeNumByPid($pid);
        $solutions->re         = Solution::getReNumByPid($pid);
        $solutions->solutions  = Solution::whereRaw('problem_id = ? AND result = ?', [$pid, 4])->orderBy('exe_time')->orderBy('exe_memory')->orderBy('code_length')->paginate(50);
        return $solutions;
    }
    
    public static function getProSolved($uid)
    {
        return Solution::whereRaw('user_id = ? AND result = ?', [$uid, 4])
               ->select(['problem_id'])->distinct()->count();
    }
    
    public static function getProUnsolved($uid)
    {
        return Solution::whereRaw('user_id = ? AND result <> ?', [$uid, 4])
               ->select(['problem_id'])->distinct()->count();
    }
    
    public static function getSolvedList($uid)
    {
        $solved_problem_list = Solution::whereRaw('user_id = ? AND result = ?', [$uid, 4])
               ->select(['problem_id'])->distinct()->get();
        foreach ($solved_problem_list as $problem) {
            $problem->solved = Solution::whereRaw('user_id = ? AND result = ? AND problem_id = ?', [$uid, 4, $problem->problem_id])
                               ->count();
            $problem->submit = Solution::whereRaw('user_id = ? AND problem_id = ?', [$uid, $problem->problem_id])
                               ->count();
        }
        return $solved_problem_list;
    }
    
    public static function getUnsolvedList($uid)
    {
        $unsolved_problem_list = Solution::whereRaw('user_id = ? AND result <> ?', [$uid, 4])
               ->select(['problem_id'])->distinct()->get();
        foreach ($unsolved_problem_list as $problem) {
            $problem->submit = Solution::whereRaw('user_id = ? AND problem_id = ?', [$uid, $problem->problem_id])
                               ->count();
        }
        return $unsolved_problem_list;
    }
    
    public static function getStatistic($cid)
    {
        $solutions  = Solution::whereRaw('contest_id=? AND contest_order>=0',[$cid])->select(['result', 'contest_order']);
        $statistic  = array();
        $pro_num    = ContestProblem::where('contest_id', '=', $cid)->count();
        foreach ($solutions as $s)
        {
            $order  = intval($s->contest_order);
            $result = intval($s->result) - 4;
            if ($result < 0 || $result > 7)
                $result = 8;
            if(!isset($statistic[$order][$result]))
                $statistic[$order][$result] = 1;
            else
                $statistic[$order][$result] ++;
            if (!isset($statistic[$pro_num][$result]))
                $statistic[$pro_num][$result] = 1;
            else
                $statistic[$pro_num][$result] ++;
            if ($result != 8)
            {
                if(!isset($statistic[$order][8]))
                    $statistic[$order][8] = 1;
                else
                    $statistic[$order][8] ++;
                if(!isset($statistic[$pro_num][8]))
                    $statistic[$pro_num][8] = 1;
                else
                    $statistic[$pro_num][8] ++;
            }
        }
        return $statistic;
    }
}