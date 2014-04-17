@extends('layouts.main')
@extends('layouts.main')

@section('title')
Contests - AntOJ
@stop

@include ('layouts.login')

@section('content')
  <div id="contest_list"> 
   <table class="table table-striped table-bordered table-hover"> 
    <thead> 
     <tr> 
      <th class="col-md-1 text-center">编号</th> 
      <th class="col-md-5 text-center">标题</th> 
      <th class="col-md-2 text-center">开始时间</th> 
      <th class="col-md-2 text-center">结束时间</th> 
      <th class="col-md-1 text-center">公开比赛</th> 
      <th class="col-md-1 text-center">比赛状态</th> 
     </tr> 
    </thead> 
    <tfoot> 
     <tr> 
      <td colspan="6"> 
       <div>
        <a title="首页" href="#1">首页</a> 
        <a title="上一页" href="#1">上一页</a> 
        <a title="1" href="#1">1</a> 
        <span>2</span> 
        <a title="3" href="#3">3</a> 
        <a title="4" href="#4">4</a> 
        <a title="下一页" href="#3">下一页</a> 
        <a title="尾页" href="#4">尾页</a> 
       </div> </td> 
     </tr> 
    </tfoot> 
    <tbody> 
     <tr> 
      <td>47</td> 
      <td><a href="#">NBUT 2013 Timed NOJ Training #013</a></td> 
      <td>2013-04-15 20:20:00</td> 
      <td>2013-04-15 22:20:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>46</td> 
      <td><a href="#46">NBUT 2013 Timed NOJ Training #012</a></td> 
      <td>2013-04-11 20:20:00</td> 
      <td>2013-04-11 22:20:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>45</td> 
      <td><a href="#45">NBUT 2013 Timed NOJ Training #011</a></td> 
      <td>2013-04-08 20:20:00</td> 
      <td>2013-04-08 22:20:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>44</td> 
      <td><a href="#44">NBUT 2013 Timed NOJ Training #010</a></td> 
      <td>2013-04-05 20:20:00</td> 
      <td>2013-04-05 22:20:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>43</td> 
      <td><a href="#43">NBUT 2013 Timed NOJ Training #009</a></td> 
      <td>2013-04-01 20:20:00</td> 
      <td>2013-04-01 22:20:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>42</td> 
      <td><a href="#42">NBUT 2013 Timed NOJ Training #008</a></td> 
      <td>2013-03-28 20:20:20</td> 
      <td>2013-03-28 22:20:20</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>41</td> 
      <td><a href="#41">NBUT 2013 Timed NOJ Training #007</a></td> 
      <td>2013-03-25 20:20:00</td> 
      <td>2013-03-25 22:20:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>40</td> 
      <td><a href="#40">HBMY Monthly 24th, Mar 2013 For 12x</a></td> 
      <td>2013-03-31 12:00:00</td> 
      <td>2013-03-31 17:00:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>38</td> 
      <td><a href="#38">NBUT 2013 Timed NOJ Training #006</a></td> 
      <td>2013-03-21 20:20:00</td> 
      <td>2013-03-21 22:20:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>37</td> 
      <td><a href="#37">NBUT 2013 Timed NOJ Training #005</a></td> 
      <td>2013-03-18 20:20:00</td> 
      <td>2013-03-18 22:20:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>36</td> 
      <td><a href="#36"> NBUT 2012 Weekly - 16th Mar for 12x</a></td> 
      <td>2013-03-16 13:20:00</td> 
      <td>2013-03-16 18:20:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>35</td> 
      <td><a href="#35">NBUT 2013 Timed NOJ Training #004</a></td> 
      <td>2013-03-14 20:20:00</td> 
      <td>2013-03-14 22:50:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>34</td> 
      <td><a href="#34">NBUT 2013 Timed NOJ Training #003</a></td> 
      <td>2013-03-11 20:20:00</td> 
      <td>2013-03-11 22:20:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>33</td> 
      <td><a href="#33">NBUT 2013 Timed NOJ Training #002</a></td> 
      <td>2013-03-07 20:20:00</td> 
      <td>2013-03-07 22:20:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>32</td> 
      <td><a href="#32">NBUT 2013 Timed NOJ Training #001</a></td> 
      <td>2013-03-04 20:20:00</td> 
      <td>2013-03-04 22:50:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>31</td> 
      <td><a href="#31">NBUT 2013 Weekly - 2nd Mar 大一大二过年回来收心信心赛</a></td> 
      <td>2013-03-02 13:00:00</td> 
      <td>2013-03-02 18:00:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>30</td> 
      <td><a href="#30">NBUT 2012 Weekly - 1st Dec for 12x</a></td> 
      <td>2012-12-01 12:30:00</td> 
      <td>2012-12-01 17:30:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>29</td> 
      <td><a href="#29">NBUT 2012 Weekly - 1st Dec for 11x</a></td> 
      <td>2012-12-01 12:30:00</td> 
      <td>2012-12-01 17:30:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>27</td> 
      <td><a href="#27">NBUT 2012 Weekly - 24th Nov for 12x (Death-Moon's Joke)</a></td> 
      <td>2012-11-24 12:30:00</td> 
      <td>2012-11-24 17:30:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
     <tr> 
      <td>26</td> 
      <td><a href="#26">NBUT 2012 Weekly - 24th Nov for 11x</a></td> 
      <td>2012-11-24 12:30:00</td> 
      <td>2012-11-24 17:30:00</td> 
      <td><span>√</span></td> 
      <td><span>已结束</span></td> 
     </tr> 
    </tbody> 
   </table> 
  </div>
@stop