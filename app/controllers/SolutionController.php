<?php

class SolutionController extends BaseController {
    

    /**
     * Check the solution is solved.
     *
     * @return int
     */
    Static function checkIsSolved($solutions)
    {
        if (count($solutions) == 0) {
            return 0;
        }
        foreach ($solutions as $solution) {
            if ($solution->result == 4) {
                return 2;
            }
        }
        return 1;
    }
    
    /**
     * get the Satus page
     *
     * @return Response
     */
    
    public function getStatus()
    {
        $rid        = Input::get('rid', null);
        $pid        = Input::get('pid', null);
        $uid        = Input::get('uid', null);
        $cid        = Input::get('cid', null);
        $language   = Input::get('language', null);
        if ($language < 1) {
            $language = null;
        }
        $result     = Input::get('result', null);
        if ($result < 1) {
            $result = null;
        }
        
        $query = "1 = 1";
        if (!is_null($rid) && !empty($rid))
            $query .= " AND solution_id = '{$rid}'";
        if (!is_null($pid) && !empty($pid))
            $query .= " AND problem_id = '{$pid}'";
        if (!is_null($uid) && !empty($uid))
            $query .= " AND user_id = '{$uid}'";
        if (!is_null($cid) && !empty($cid))
            $query .= " AND contest_id = '{$cid}'";
        if (!is_null($language) && !empty($language))
            $query .= " AND language = '{$language}'";
        if (!is_null($result) && !empty($result))
            $query .= " AND result = '{$result}'";
        $solutions = new Solution;
        $solutions = $solutions->findStatus($query);
        foreach ($solutions as &$solution) {
            $solution->user_nick = User::where('user_id', '=', $solution->user_id)->get(['nick']);
            $solution->user_nick = $solution->user_nick[0]->nick;
        }
        $result = Solution::$status;
        $lan = Solution::$lan;
        $view = View::make('solution.status');
        if (!is_null($cid) && !empty($cid))
        {
            $contest    = Contest::getContestByCID($cid);
            $view->with('contest', $contest);
        }
        $view->with('solutions', $solutions);
        $view->with('result', $result);
        $view->with('lan', $lan);
        return $view;
    }
}