<?php

class ContestController extends BaseController {
    
    /**
     *Get the problems list.
     *
     *@return Response
     */
    public function getContestList()
    {
        $contests = Contest::getContestList();
        $view = View::make('contest.contests');
        $view->with('contests', $contests);
        return $view;
    }
    
    /**
     *Show the problems of contest by cid
     *
     *@return Response
     */
    public function showContestProblems($cid)
    {
        $contest = Contest::getContestByCID($cid);
        $problems = ContestProblem::getProblemsByCID($cid);
        
        $view = View::make('contest.problems');
        $view->with('contest', $contest);
        $view->with('problems', $problems);
        return $view;
    }
    
    /**
     *Show the standing of contest by cid
     *
     *@return Response
     */
    public function showContestStanding($cid)
    {
        $standing   = Standing::getStanding($cid);
        $pro_num    = ContestProblem::where('contest_id', '=', $cid)->count();
        $contest    = Contest::getContestByCID($cid);
        $problems   = ContestProblem::getProblemsByCID($cid);
        
        $view = View::make('contest.standing');
        $view->with('standing', $standing);
        $view->with('pro_num', $pro_num);
        $view->with('contest', $contest);
        $view->with('problems', $problems);
        return $view;
    }
    
    /**
     *Show the statistic of contest by cid
     *
     *@return Response
     */
    public function showContestStatistic($cid)
    {
        $statistic   = Solution::getStatistic($cid);
        $pro_num    = ContestProblem::where('contest_id', '=', $cid)->count();
        $contest    = Contest::getContestByCID($cid);
        
        $view = View::make('contest.statistic');
        $view->with('statistic', $statistic);
        $view->with('pro_num', $pro_num);
        $view->with('contest', $contest);
        return $view;
    }
}