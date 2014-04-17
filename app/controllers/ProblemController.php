<?php

Config::get('get_ip.php');

class ProblemController extends BaseController {
    
    /**
     *Get the problems list.
     *
     *@return Response
     */
    public function getProblemList($page_num = 1)
    {
        $count_page = ceil(Problem::all()->count() / 100);
        if($page_num > $count_page)
            App::abort(404);

        $problem_from = 1000 + ($page_num - 1) * 100;
        $problems = Problem::whereBetween('problem_id', [$problem_from, $problem_from + 99])->get();
        $problem_stat = array();
        if (Auth::check()) {
            $user_id = Session::get('user_id');
            foreach ($problems as $problem) {
                $problem_stat[$problem->problem_id] = 
                    SolutionController::checkIsSolved(
                    Solution::getSolutionsByUPid($user_id, $problem->problem));
            }
        }
        return View::make('problem.problemset')->with(array('problems'      => $problems,
                                                            'count_page'    => $count_page,
                                                            'current_page'  => $page_num,
                                                            'problem_stat'  => $problem_stat));
    }
    
    /**
     *Get the problems detail.
     *
     *@return Response
     */
    public function getProblem($pid)
    {
        $problem    = new Problem;
        $problem    = $problem->getProblemById($pid);
        return View::make('problem.show')->with('problem', $problem);
    }
    
    /**
     * Get the Statistic By Problem ID
     *
     * @return Response
     */
    public function getStatistic($pid)
    {
        $solutions = Solution::getAccSolutionsByPid($pid);
        return View::make('problem.statistic')->with(['solutions' => $solutions,
                                                      'pid'       => $pid]);
    }
    
    /**
     * Get the Submit Page By Problem ID
     *
     * @return Response
     */
    public function getSubmit($pid)
    {
        return View::make('problem.submit')->with(['pid' => $pid]);
    }
    
    /**
     * Post the Submit Page By Problem ID
     *
     * @return Response
     */
    public function postSubmit($pid)
    {
        $solution = new Solution;
        $solution->problem_id   = Input::get('pid');
        $solution->user_id      = Session::get('user_id');
        $solution->submit_date  = date("Y-m-d H:i:s",time());
        $solution->result       = 0;
        $solution->language     = Input::get('language');
        $solution->submit_ip    = get_ip();
        $solution->code_length  = strlen(Input::get('source'));
        $solution->save();
        $solution_id = $solution->solution_id;
        
        $sourceCode = new SourceCode;
        $sourceCode->code        = Input::get('source');
        $sourceCode->solution_id = $solution_id;
        $sourceCode->save();
        
        $user = new User;
        $user = $user->find($solution->user_id);
        $user->submit += 1;
        $user->save();
        return Redirect::to('/status');
    }
}