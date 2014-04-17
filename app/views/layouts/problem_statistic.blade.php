@extends('layouts.main')

@section('title')
Ant Online Judge
@stop

@include ('layouts.login')

@section('content')
<div class="row">
<div class="col-md-3">
<ul class="nav nav-pills nav-stacked showborder">
    <li><a>Total Submissions<span class="badge pull-right">5511</span></a></li>
    <li><a>Submitted Users<span class="badge pull-right">2249</span></a></li>
    <li><a>Solved User<span class="badge pull-right">1982</span></a></li>
            <li>
            <a>Accepted<span class="badge pull-right">2852</span></a>
        </li>
            <li>
            <a>Presentation Error<span class="badge pull-right">69</span></a>
        </li>
            <li>
            <a>Wrong Answer<span class="badge pull-right">622</span></a>
        </li>
            <li>
            <a>Time Limit Exceed<span class="badge pull-right">223</span></a>
        </li>
            <li>
            <a>Memory Limit Exceed<span class="badge pull-right">14</span></a>
        </li>
            <li>
            <a>Output Limit Exceed<span class="badge pull-right">11</span></a>
        </li>
            <li>
            <a>Runtime Error<span class="badge pull-right">403</span></a>
        </li>
            <li>
            <a>Compile Error<span class="badge pull-right">1308</span></a>
        </li>
    </ul>
</div>
<div class="col-md-9">
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Rank</th><th>RunID</th><th>Momery</th><th>Time</th><th>User</th><th>Language</th><th>Submit Time</th>
        </tr>
    </thead>
    <tbody>
                                <tr>
            <td>1</td>
            <td>63530</td>
            <td>344KB</td>
            <td>0MS</td>
            <td><a href="/u/brokenwing">brokenwing</a></td>
            <td>Pascal</td>
            <td>2011-06-06 11:20:25</td>
        </tr>
                        <tr>
            <td>2</td>
            <td>59508</td>
            <td>344KB</td>
            <td>0MS</td>
            <td><a href="/u/fengyunhuoai">fengyunhuoai</a></td>
            <td>Pascal</td>
            <td>2011-04-28 09:02:25</td>
        </tr>
                        <tr>
            <td>3</td>
            <td>68530</td>
            <td>344KB</td>
            <td>0MS</td>
            <td><a href="/u/710516537">710516537</a></td>
            <td>Pascal</td>
            <td>2011-08-08 22:09:07</td>
        </tr>
                        <tr>
            <td>4</td>
            <td>55520</td>
            <td>344KB</td>
            <td>0MS</td>
            <td><a href="/u/alien93">alien93</a></td>
            <td>Pascal</td>
            <td>2011-02-23 22:02:53</td>
        </tr>
                        <tr>
            <td>5</td>
            <td>59545</td>
            <td>344KB</td>
            <td>0MS</td>
            <td><a href="/u/yefllower">yefllower</a></td>
            <td>Pascal</td>
            <td>2011-04-28 09:57:31</td>
        </tr>
                        <tr>
            <td>6</td>
            <td>51161</td>
            <td>344KB</td>
            <td>0MS</td>
            <td><a href="/u/cxy">cxy</a></td>
            <td>Pascal</td>
            <td>2010-10-26 19:14:27</td>
        </tr>
                        <tr>
            <td>7</td>
            <td>11336</td>
            <td>444KB</td>
            <td>4MS</td>
            <td><a href="/u/Gaewah">Gaewah</a></td>
            <td>C++</td>
            <td>2008-08-25 14:03:23</td>
        </tr>
                        <tr>
            <td>8</td>
            <td>53798</td>
            <td>348KB</td>
            <td>0MS</td>
            <td><a href="/u/lasha_kapo">lasha_kapo</a></td>
            <td>Pascal</td>
            <td>2010-12-19 00:53:15</td>
        </tr>
                        <tr>
            <td>9</td>
            <td>71584</td>
            <td>348KB</td>
            <td>0MS</td>
            <td><a href="/u/zxybazh">zxybazh</a></td>
            <td>Pascal</td>
            <td>2011-11-02 19:02:57</td>
        </tr>
                        <tr>
            <td>10</td>
            <td>33979</td>
            <td>456KB</td>
            <td>12MS</td>
            <td><a href="/u/jzm">jzm</a></td>
            <td>C++</td>
            <td>2010-03-07 11:36:52</td>
        </tr>
                        <tr>
            <td>11</td>
            <td>55375</td>
            <td>348KB</td>
            <td>0MS</td>
            <td><a href="/u/shiyunxiao">shiyunxiao</a></td>
            <td>Pascal</td>
            <td>2011-02-12 19:30:18</td>
        </tr>
                        <tr>
            <td>12</td>
            <td>49227</td>
            <td>608KB</td>
            <td>0MS</td>
            <td><a href="/u/xiaojj">xiaojj</a></td>
            <td>C++</td>
            <td>2010-08-12 14:46:16</td>
        </tr>
                        <tr>
            <td>13</td>
            <td>59966</td>
            <td>348KB</td>
            <td>0MS</td>
            <td><a href="/u/qdcjh1991">qdcjh1991</a></td>
            <td>Pascal</td>
            <td>2011-04-30 13:15:01</td>
        </tr>
                        <tr>
            <td>14</td>
            <td>30012</td>
            <td>372KB</td>
            <td>0MS</td>
            <td><a href="/u/ediwadehust">ediwadehust</a></td>
            <td>Pascal</td>
            <td>2009-10-21 19:31:28</td>
        </tr>
                        <tr>
            <td>15</td>
            <td>20633</td>
            <td>372KB</td>
            <td>0MS</td>
            <td><a href="/u/32767">32767</a></td>
            <td>Pascal</td>
            <td>2009-04-07 18:22:48</td>
        </tr>
                        <tr>
            <td>16</td>
            <td>3137</td>
            <td>372KB</td>
            <td>0MS</td>
            <td><a href="/u/chinacn">chinacn</a></td>
            <td>Pascal</td>
            <td>2008-06-18 18:34:55</td>
        </tr>
                        <tr>
            <td>17</td>
            <td>1052</td>
            <td>376KB</td>
            <td>4MS</td>
            <td><a href="/u/hzh0803">hzh0803</a></td>
            <td>Pascal</td>
            <td>2008-05-16 11:01:35</td>
        </tr>
                        <tr>
            <td>18</td>
            <td>28964</td>
            <td>372KB</td>
            <td>0MS</td>
            <td><a href="/u/davidlv">davidlv</a></td>
            <td>Pascal</td>
            <td>2009-09-27 14:31:11</td>
        </tr>
                        <tr>
            <td>19</td>
            <td>37117</td>
            <td>440KB</td>
            <td>0MS</td>
            <td><a href="/u/20100417">20100417</a></td>
            <td>C</td>
            <td>2010-04-04 18:33:49</td>
        </tr>
                        <tr>
            <td>20</td>
            <td>30004</td>
            <td>376KB</td>
            <td>0MS</td>
            <td><a href="/u/ediwade">ediwade</a></td>
            <td>Pascal</td>
            <td>2009-10-21 19:19:48</td>
        </tr>
                        <tr>
            <td>21</td>
            <td>3138</td>
            <td>600KB</td>
            <td>0MS</td>
            <td><a href="/u/BMW">BMW</a></td>
            <td>C++</td>
            <td>2008-06-18 18:37:32</td>
        </tr>
                        <tr>
            <td>22</td>
            <td>16073</td>
            <td>372KB</td>
            <td>4MS</td>
            <td><a href="/u/gdgzgq">gdgzgq</a></td>
            <td>Pascal</td>
            <td>2008-10-29 12:32:01</td>
        </tr>
                        <tr>
            <td>23</td>
            <td>32039</td>
            <td>376KB</td>
            <td>0MS</td>
            <td><a href="/u/09101009">09101009</a></td>
            <td>Pascal</td>
            <td>2009-11-29 14:19:14</td>
        </tr>
                        <tr>
            <td>24</td>
            <td>93526</td>
            <td>376KB</td>
            <td>0MS</td>
            <td><a href="/u/qinzhipingzj">qinzhipingzj</a></td>
            <td>Pascal</td>
            <td>2013-11-08 19:15:01</td>
        </tr>
                        <tr>
            <td>25</td>
            <td>1000</td>
            <td>436KB</td>
            <td>4MS</td>
            <td><a href="/u/weiyi">weiyi</a></td>
            <td>C</td>
            <td>2008-05-14 21:48:32</td>
        </tr>
                        <tr>
            <td>26</td>
            <td>3664</td>
            <td>616KB</td>
            <td>8MS</td>
            <td><a href="/u/crazyCK">crazyCK</a></td>
            <td>C++</td>
            <td>2008-07-02 18:19:00</td>
        </tr>
                        <tr>
            <td>27</td>
            <td>31169</td>
            <td>608KB</td>
            <td>8MS</td>
            <td><a href="/u/loyal">loyal</a></td>
            <td>C++</td>
            <td>2009-11-07 12:54:50</td>
        </tr>
                        <tr>
            <td>28</td>
            <td>20664</td>
            <td>380KB</td>
            <td>0MS</td>
            <td><a href="/u/piyifan">piyifan</a></td>
            <td>Pascal</td>
            <td>2009-04-09 13:22:47</td>
        </tr>
                        <tr>
            <td>29</td>
            <td>94755</td>
            <td>384KB</td>
            <td>0MS</td>
            <td><a href="/u/Hypoxa">Hypoxa</a></td>
            <td>Pascal</td>
            <td>2013-11-18 23:30:56</td>
        </tr>
                        <tr>
            <td>30</td>
            <td>20662</td>
            <td>380KB</td>
            <td>0MS</td>
            <td><a href="/u/xlmj531">xlmj531</a></td>
            <td>Pascal</td>
            <td>2009-04-09 13:22:02</td>
        </tr>
                        <tr>
            <td>31</td>
            <td>20676</td>
            <td>380KB</td>
            <td>0MS</td>
            <td><a href="/u/teambz">teambz</a></td>
            <td>Pascal</td>
            <td>2009-04-09 13:31:59</td>
        </tr>
                        <tr>
            <td>32</td>
            <td>1100</td>
            <td>444KB</td>
            <td>0MS</td>
            <td><a href="/u/lshmouse">lshmouse</a></td>
            <td>C++</td>
            <td>2008-05-16 18:41:21</td>
        </tr>
                        <tr>
            <td>33</td>
            <td>93507</td>
            <td>380KB</td>
            <td>0MS</td>
            <td><a href="/u/FNOI05cLance">FNOI05cLance</a></td>
            <td>Pascal</td>
            <td>2013-11-08 15:12:13</td>
        </tr>
                        <tr>
            <td>34</td>
            <td>95730</td>
            <td>380KB</td>
            <td>0MS</td>
            <td><a href="/u/whz">whz</a></td>
            <td>Pascal</td>
            <td>2013-12-07 21:14:31</td>
        </tr>
                        <tr>
            <td>35</td>
            <td>96655</td>
            <td>384KB</td>
            <td>0MS</td>
            <td><a href="/u/mango">mango</a></td>
            <td>Pascal</td>
            <td>2013-12-27 12:17:21</td>
        </tr>
                        <tr>
            <td>36</td>
            <td>94684</td>
            <td>388KB</td>
            <td>0MS</td>
            <td><a href="/u/lijingze">lijingze</a></td>
            <td>Pascal</td>
            <td>2013-11-16 15:49:00</td>
        </tr>
                        <tr>
            <td>37</td>
            <td>64963</td>
            <td>428KB</td>
            <td>0MS</td>
            <td><a href="/u/codevirus">codevirus</a></td>
            <td>C</td>
            <td>2011-06-20 09:46:12</td>
        </tr>
                        <tr>
            <td>38</td>
            <td>1059</td>
            <td>436KB</td>
            <td>0MS</td>
            <td><a href="/u/DarkRaven">DarkRaven</a></td>
            <td>C</td>
            <td>2008-05-16 12:05:59</td>
        </tr>
                        <tr>
            <td>39</td>
            <td>3279</td>
            <td>436KB</td>
            <td>0MS</td>
            <td><a href="/u/sduwangfengfight">sduwangfengfight</a></td>
            <td>C</td>
            <td>2008-06-21 08:57:03</td>
        </tr>
                        <tr>
            <td>40</td>
            <td>23256</td>
            <td>436KB</td>
            <td>0MS</td>
            <td><a href="/u/iwitggwg">iwitggwg</a></td>
            <td>C</td>
            <td>2009-06-08 14:18:09</td>
        </tr>
                        <tr>
            <td>41</td>
            <td>3696</td>
            <td>436KB</td>
            <td>0MS</td>
            <td><a href="/u/aij">aij</a></td>
            <td>C</td>
            <td>2008-07-04 20:08:00</td>
        </tr>
                        <tr>
            <td>42</td>
            <td>30393</td>
            <td>436KB</td>
            <td>0MS</td>
            <td><a href="/u/87541488">87541488</a></td>
            <td>C</td>
            <td>2009-11-03 20:27:03</td>
        </tr>
                        <tr>
            <td>43</td>
            <td>7967</td>
            <td>436KB</td>
            <td>0MS</td>
            <td><a href="/u/xh176233756">xh176233756</a></td>
            <td>C</td>
            <td>2008-08-01 11:25:22</td>
        </tr>
                        <tr>
            <td>44</td>
            <td>24155</td>
            <td>436KB</td>
            <td>0MS</td>
            <td><a href="/u/netlock119">netlock119</a></td>
            <td>C</td>
            <td>2009-07-16 19:32:30</td>
        </tr>
                        <tr>
            <td>45</td>
            <td>30103</td>
            <td>436KB</td>
            <td>0MS</td>
            <td><a href="/u/LJL">LJL</a></td>
            <td>C</td>
            <td>2009-10-24 21:50:41</td>
        </tr>
                        <tr>
            <td>46</td>
            <td>1019</td>
            <td>436KB</td>
            <td>0MS</td>
            <td><a href="/u/xyz347">xyz347</a></td>
            <td>C</td>
            <td>2008-05-15 19:12:15</td>
        </tr>
                        <tr>
            <td>47</td>
            <td>33540</td>
            <td>436KB</td>
            <td>0MS</td>
            <td><a href="/u/shiyanch">shiyanch</a></td>
            <td>C</td>
            <td>2010-01-26 22:17:04</td>
        </tr>
                        <tr>
            <td>48</td>
            <td>1464</td>
            <td>436KB</td>
            <td>0MS</td>
            <td><a href="/u/linjiazhen">linjiazhen</a></td>
            <td>C</td>
            <td>2008-05-30 12:27:36</td>
        </tr>
                        <tr>
            <td>49</td>
            <td>30061</td>
            <td>436KB</td>
            <td>0MS</td>
            <td><a href="/u/liuq901">liuq901</a></td>
            <td>C</td>
            <td>2009-10-23 19:29:24</td>
        </tr>
                        <tr>
            <td>50</td>
            <td>19995</td>
            <td>444KB</td>
            <td>4MS</td>
            <td><a href="/u/zc_er">zc_er</a></td>
            <td>C</td>
            <td>2009-03-01 20:25:28</td>
        </tr>
            </tbody>
</table>
</div>
</div>
@stop