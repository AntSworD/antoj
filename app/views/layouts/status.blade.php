@extends('layouts.main')

@section('title')
Contests - AntOJ
@stop

@include ('layouts.login')

@section('content')
   <div id="status_query_nav">
        <form action="/status" method="GET" class="form-inline" role="form">
            <div class="form-group">
                <label class="sr-only" for="pid">Problem ID</label>
                <input placeholder="Problem ID" name="pid" id="pid" class="form-control">
            </div>
            <div class="form-group">
                <label class="sr-only" for="udi">User ID</label>
                <input placeholder="User ID" name="uid" id="uid" class="form-control">
            </div>
            <div class="form-group">
                <label class="sr-only" for="language">Language</label>
                <select name="language" class="form-control">
                    <option value="-1" selected="selected">Language</option>
                            <option value="0">C</option>
                            <option value="1">C++</option>
                            <option value="2">Pascal</option>
                            <option value="3">Java</option>
                        </select>
            </div>
            <div class="form-group">
                <label class="sr-only" for="result">Result</label>
                <select name="result" class="form-control">
                    <option value="-1" selected="selected">Result</option>
                            <option value="4">Accepted</option>
                            <option value="5">Presentation Error</option>
                            <option value="6">Wrong Answer</option>
                            <option value="7">Runtime Error</option>
                            <option value="8">Time Limit Exceed</option>
                            <option value="9">Memory Limit Exceed</option>
                            <option value="10">Output Limit Exceed</option>
                            <option value="11">Compile Error</option>
                            <option value="12">System Error</option>
                            <option value="13">Out of Contest Time</option>
                        </select>
            </div>
            <input type="submit" value="Filter" class="btn">
        </form>
   </div>
<div id="run_list">
   <table class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="col-md-1 text-center">RUNID</th>
      <th class="col-md-1 text-center">用户</th>
      <th class="col-md-1 text-center">题号</th>
      <th class="col-md-3 text-center">状态</th>
      <th class="col-md-1 text-center">运行时间(MS)</th>
      <th class="col-md-1 text-center">运行内存(K)</th>
      <th class="col-md-1 text-center">代码长度</th>
      <th class="col-md-1 text-center">语言</th>
      <th class="col-md-2 text-center">提交时间</th>
     </tr>
    </thead>
    <tfoot>
     <tr>
      <td colspan="9">
       <div >
        <span>首页</span>
        <span>上一页</span>
        <span>1</span>
        <a title="2" href="#2">2</a>
        <a title="3" href="#3">3</a>... 
        <a title="1829" href="#1829">1829</a>
        <a title="1830" href="#1830">1830</a>
        <a title="1831" href="#1831">1831</a>
        <a title="下一页" href="#2">下一页</a>
        <a title="尾页" href="#1831">尾页</a>
       </div></td>
     </tr>
    </tfoot>
    <tbody>
     <tr>
      <td>36627</td>
      <td><a href="#2381" target="_blank">gonggong</a></td>
      <td><a href="#1282">1282</a></td>
      <td><span>TIME_LIMIT_EXCEEDED</span></td>
      <td>1000</td>
      <td>260</td>
      <td>366</td>
      <td><a href="#36627" target="_blank">G++ </a></td>
      <td>2014-03-11 14:56:26</td>
     </tr>
     <tr>
      <td>36626</td>
      <td><a href="#2381" target="_blank">gonggong</a></td>
      <td><a href="#1282">1282</a></td>
      <td><span>TIME_LIMIT_EXCEEDED</span></td>
      <td>1000</td>
      <td>260</td>
      <td>354</td>
      <td><a href="#36626" target="_blank">G++ </a></td>
      <td>2014-03-11 14:52:56</td>
     </tr>
     <tr>
      <td>36625</td>
      <td><a href="#2381" target="_blank">gonggong</a></td>
      <td><a href="#1282">1282</a></td>
      <td><span>TIME_LIMIT_EXCEEDED</span></td>
      <td>1000</td>
      <td>260</td>
      <td>354</td>
      <td><a href="#36625" target="_blank">G++ </a></td>
      <td>2014-03-11 14:48:06</td>
     </tr>
     <tr>
      <td>36624</td>
      <td><a href="#2381" target="_blank">gonggong</a></td>
      <td><a href="#1282">1282</a></td>
      <td><span>WRONG_ANSWER</span></td>
      <td>15</td>
      <td>260</td>
      <td>46</td>
      <td><a href="#36624" target="_blank">G++ </a></td>
      <td>2014-03-11 14:36:38</td>
     </tr>
     <tr>
      <td>36623</td>
      <td><a href="#2381" target="_blank">gonggong</a></td>
      <td><a href="#1282">1282</a></td>
      <td><span>MEMORY_LIMIT_EXCEEDED</span></td>
      <td>0</td>
      <td>612</td>
      <td>48</td>
      <td><a href="#36623" target="_blank">G++ </a></td>
      <td>2014-03-11 14:24:09</td>
     </tr>
     <tr>
      <td>36622</td>
      <td><a href="#2384" target="_blank">W_T_F</a></td>
      <td><a href="#1039">1039</a></td>
      <td><span style="color: red">ACCEPTED</span></td>
      <td>0</td>
      <td>224</td>
      <td>566</td>
      <td><a href="#36622" target="_blank">GCC </a></td>
      <td>2014-03-11 13:38:23</td>
     </tr>
     <tr>
      <td>36621</td>
      <td><a href="#2386" target="_blank">nbut10</a></td>
      <td><a href="#1053">1053</a></td>
      <td><span>WRONG_ANSWER</span></td>
      <td>0</td>
      <td>224</td>
      <td>218</td>
      <td><a href="#36621" target="_blank">GCC </a></td>
      <td>2014-03-11 13:12:22</td>
     </tr>
     <tr>
      <td>36620</td>
      <td><a href="#2388" target="_blank">huangwenon</a></td>
      <td><a href="#1243">1243</a></td>
      <td><span style="color: red">ACCEPTED</span></td>
      <td>125</td>
      <td>224</td>
      <td>261</td>
      <td><a href="#36620" target="_blank">GCC </a></td>
      <td>2014-03-11 12:51:29</td>
     </tr>
     <tr>
      <td>36619</td>
      <td><a href="#537" target="_blank">vjudge5</a></td>
      <td><a href="#1455">1455</a></td>
      <td><span>WRONG_ANSWER</span></td>
      <td>15</td>
      <td>296</td>
      <td>653</td>
      <td><a href="#36619" target="_blank">G++ </a></td>
      <td>2014-03-11 12:50:36</td>
     </tr>
     <tr>
      <td>36618</td>
      <td><a href="#2388" target="_blank">huangwenon</a></td>
      <td><a href="#1243">1243</a></td>
      <td><span>PRESENTATION_ERROR</span></td>
      <td>140</td>
      <td>224</td>
      <td>231</td>
      <td><a href="#36618" target="_blank">GCC </a></td>
      <td>2014-03-11 12:48:41</td>
     </tr>
     <tr>
      <td>36617</td>
      <td><a href="#2388" target="_blank">huangwenon</a></td>
      <td><a href="#1243">1243</a></td>
      <td><span>PRESENTATION_ERROR</span></td>
      <td>125</td>
      <td>224</td>
      <td>231</td>
      <td><a href="#36617" target="_blank">GCC </a></td>
      <td>2014-03-11 12:46:02</td>
     </tr>
     <tr>
      <td>36616</td>
      <td><a href="#535" target="_blank">vjudge3</a></td>
      <td><a href="#1455">1455</a></td>
      <td><span>WRONG_ANSWER</span></td>
      <td>0</td>
      <td>292</td>
      <td>622</td>
      <td><a href="#36616" target="_blank">G++ </a></td>
      <td>2014-03-11 12:45:35</td>
     </tr>
     <tr>
      <td>36615</td>
      <td><a href="#2386" target="_blank">nbut10</a></td>
      <td><a href="#1049">1049</a></td>
      <td><span>PRESENTATION_ERROR</span></td>
      <td>0</td>
      <td>224</td>
      <td>282</td>
      <td><a href="#36615" target="_blank">GCC </a></td>
      <td>2014-03-11 12:44:08</td>
     </tr>
     <tr>
      <td>36614</td>
      <td><a href="#2388" target="_blank">huangwenon</a></td>
      <td><a href="#1243">1243</a></td>
      <td><span>PRESENTATION_ERROR</span></td>
      <td>125</td>
      <td>224</td>
      <td>231</td>
      <td><a href="#36614" target="_blank">GCC </a></td>
      <td>2014-03-11 12:43:28</td>
     </tr>
     <tr>
      <td>36613</td>
      <td><a href="#534" target="_blank">vjudge2</a></td>
      <td><a style="color: rgb(0, 114, 255); opacity: 1;" href="#1455">1455</a></td>
      <td><span>WRONG_ANSWER</span></td>
      <td>0</td>
      <td>292</td>
      <td>628</td>
      <td><a href="#36613" target="_blank">G++ </a></td>
      <td>2014-03-11 12:42:15</td>
     </tr>
     <tr>
      <td>36612</td>
      <td><a href="#2388" target="_blank">huangwenon</a></td>
      <td><a href="#1243">1243</a></td>
      <td><span>PRESENTATION_ERROR</span></td>
      <td>109</td>
      <td>224</td>
      <td>231</td>
      <td><a href="#36612" target="_blank">G++ </a></td>
      <td>2014-03-11 12:40:23</td>
     </tr>
     <tr>
      <td>36611</td>
      <td><a href="#2386" target="_blank">nbut10</a></td>
      <td><a href="#1049">1049</a></td>
      <td><span>PRESENTATION_ERROR</span></td>
      <td>0</td>
      <td>224</td>
      <td>283</td>
      <td><a href="#36611" target="_blank">GCC </a></td>
      <td>2014-03-11 12:38:54</td>
     </tr>
     <tr>
      <td>36610</td>
      <td><a href="#2388" target="_blank">huangwenon</a></td>
      <td><a href="#1242">1242</a></td>
      <td><span style="color: red">ACCEPTED</span></td>
      <td>0</td>
      <td>224</td>
      <td>115</td>
      <td><a href="#36610" target="_blank">G++ </a></td>
      <td>2014-03-11 12:38:39</td>
     </tr>
     <tr>
      <td>36609</td>
      <td><a href="#2388" target="_blank">huangwenon</a></td>
      <td><a href="#1241">1241</a></td>
      <td><span style="color: red">ACCEPTED</span></td>
      <td>125</td>
      <td>224</td>
      <td>162</td>
      <td><a href="#36609" target="_blank">G++ </a></td>
      <td>2014-03-11 12:36:12</td>
     </tr>
     <tr>
      <td>36608</td>
      <td><a href="#2388" target="_blank">huangwenon</a></td>
      <td><a href="#1239">1239</a></td>
      <td><span>WRONG_ANSWER</span></td>
      <td>156</td>
      <td>224</td>
      <td>162</td>
      <td><a href="#36608" target="_blank">G++ </a></td>
      <td>2014-03-11 12:35:55</td>
     </tr>
    </tbody>
   </table>
  </div>
@stop