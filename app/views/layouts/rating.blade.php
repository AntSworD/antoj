@extends('layouts.main')

@section('title')
Contests - AntOJ
@stop

@include ('layouts.login')

@section('content')
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Rank</th>
            <th>User ID</th>
            <th>Nick</th>
            <th>Solved</th>
            <th>Submit</th>
            <th>Ratio</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td colspan="6">
                <div>
                    <span>首页</span>
                    <span>上一页</span>
                    <span class="page_cur">1</span>
                    <a title="2" href="#2">2</a>
                    <a title="3" href="#3">3</a>
                    ...
                    <a title="229" href="#229">229</a>
                    <a title="230" href="#230">230</a>
                    <a title="231" href="#231">231</a>
                    <a title="下一页" href="#2">下一页</a>
                    <a title="尾页" href="#231">尾页</a>
                </div>
            </td>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td class="rank">1</td>
            <td><a href="/u/lshmouse">lshmouse</a></td>
            <td></td>
            <td>357</td>
            <td>1039</td>
            <td>34.36%</td>
        </tr>
        <tr>
            <td class="rank">2</td>
            <td><a href="/u/craig04">craig04</a></td>
            <td></td>
            <td>203</td>
            <td>369</td>
            <td>55.01%</td>
        </tr>
        <tr>
            <td class="rank">3</td>
            <td><a href="/u/Harry">Harry</a></td>
            <td></td>
            <td>177</td>
            <td>447</td>
            <td>39.60%</td>
        </tr>
        <tr>
            <td class="rank">4</td>
            <td><a href="/u/Rocket323">Rocket323</a></td>
            <td></td>
            <td>175</td>
            <td>622</td>
            <td>28.14%</td>
        </tr>
        <tr>
            <td class="rank">5</td>
            <td><a href="/u/majia1234">majia1234</a></td>
            <td></td>
            <td>140</td>
            <td>166</td>
            <td>84.34%</td>
        </tr>
        <tr>
            <td class="rank">6</td>
            <td><a href="/u/vjudge1">vjudge1</a></td>
            <td></td>
            <td>126</td>
            <td>2678</td>
            <td>4.71%</td>
        </tr>
        <tr>
            <td class="rank">7</td>
            <td><a href="/u/vjudge4">vjudge4</a></td>
            <td></td>
            <td>121</td>
            <td>2549</td>
            <td>4.75%</td>
        </tr>
        <tr>
            <td class="rank">8</td>
            <td><a href="/u/vjudge3">vjudge3</a></td>
            <td></td>
            <td>120</td>
            <td>2597</td>
            <td>4.62%</td>
        </tr>
        <tr>
            <td class="rank">9</td>
            <td><a href="/u/vjudge5">vjudge5</a></td>
            <td></td>
            <td>120</td>
            <td>2618</td>
            <td>4.58%</td>
        </tr>
        <tr>
            <td class="rank">10</td>
            <td><a href="/u/vjudge2">vjudge2</a></td>
            <td></td>
            <td>117</td>
            <td>2595</td>
            <td>4.51%</td>
        </tr>
        <tr>
            <td class="rank">11</td>
            <td><a href="/u/Algorithm">Algorithm</a></td>
            <td></td>
            <td>97</td>
            <td>487</td>
            <td>19.92%</td>
        </tr>
        <tr>
            <td class="rank">12</td>
            <td><a href="/u/TheLordOfTheRings">TheLordOfTheRings</a></td>
            <td></td>
            <td>94</td>
            <td>314</td>
            <td>29.94%</td>
        </tr>
        <tr>
            <td class="rank">13</td>
            <td><a href="/u/chensunrise">chensunrise</a></td>
            <td></td>
            <td>91</td>
            <td>416</td>
            <td>21.88%</td>
        </tr>
        <tr>
            <td class="rank">14</td>
            <td><a href="/u/baiqi2piao">baiqi2piao</a></td>
            <td></td>
            <td>89</td>
            <td>416</td>
            <td>21.39%</td>
        </tr>
        <tr>
            <td class="rank">15</td>
            <td><a href="/u/ChaeYeon">ChaeYeon</a></td>
            <td></td>
            <td>81</td>
            <td>297</td>
            <td>27.27%</td>
        </tr>
        <tr>
            <td class="rank">16</td>
            <td><a href="/u/wushaoliang">wushaoliang</a></td>
            <td></td>
            <td>78</td>
            <td>182</td>
            <td>42.86%</td>
        </tr>
        <tr>
            <td class="rank">17</td>
            <td><a href="/u/majia8961">majia8961</a></td>
            <td></td>
            <td>76</td>
            <td>217</td>
            <td>35.02%</td>
        </tr>
        <tr>
            <td class="rank">18</td>
            <td><a href="/u/xh176233756">xh176233756</a></td>
            <td></td>
            <td>73</td>
            <td>171</td>
            <td>42.69%</td>
        </tr>
        <tr>
            <td class="rank">19</td>
            <td><a href="/u/hust08p01">hust08p01</a></td>
            <td></td>
            <td>71</td>
            <td>321</td>
            <td>22.12%</td>
        </tr>
        <tr>
            <td class="rank">20</td>
            <td><a href="/u/Sempr">Sempr</a></td>
            <td></td>
            <td>67</td>
            <td>184</td>
            <td>36.41%</td>
        </tr>
        <tr>
            <td class="rank">21</td>
            <td><a href="/u/wangjunyong">wangjunyong</a></td>
            <td></td>
            <td>62</td>
            <td>241</td>
            <td>25.73%</td>
        </tr>
        <tr>
            <td class="rank">22</td>
            <td><a href="/u/kissworld">kissworld</a></td>
            <td></td>
            <td>61</td>
            <td>326</td>
            <td>18.71%</td>
        </tr>
        <tr>
            <td class="rank">23</td>
            <td><a href="/u/Thank_you">Thank_you</a></td>
            <td></td>
            <td>60</td>
            <td>199</td>
            <td>30.15%</td>
        </tr>
        <tr>
            <td class="rank">24</td>
            <td><a href="/u/Arios">Arios</a></td>
            <td></td>
            <td>59</td>
            <td>213</td>
            <td>27.70%</td>
        </tr>
        <tr>
            <td class="rank">25</td>
            <td><a href="/u/Potating">Potating</a></td>
            <td></td>
            <td>54</td>
            <td>229</td>
            <td>23.58%</td>
        </tr>
        <tr>
            <td class="rank">26</td>
            <td><a href="/u/foreverlin">foreverlin</a></td>
            <td></td>
            <td>52</td>
            <td>232</td>
            <td>22.41%</td>
        </tr>
        <tr>
            <td class="rank">27</td>
            <td><a href="/u/UsingTC">UsingTC</a></td>
            <td></td>
            <td>52</td>
            <td>143</td>
            <td>36.36%</td>
        </tr>
        <tr>
            <td class="rank">28</td>
            <td><a href="/u/idy">idy</a></td>
            <td></td>
            <td>51</td>
            <td>214</td>
            <td>23.83%</td>
        </tr>
        <tr>
            <td class="rank">29</td>
            <td><a href="/u/newmyl">newmyl</a></td>
            <td></td>
            <td>50</td>
            <td>275</td>
            <td>18.18%</td>
        </tr>
        <tr>
            <td class="rank">30</td>
            <td><a href="/u/cjq">cjq</a></td>
            <td></td>
            <td>48</td>
            <td>139</td>
            <td>34.53%</td>
        </tr>
        <tr>
            <td class="rank">31</td>
            <td><a href="/u/cc13_LHer">cc13_LHer</a></td>
            <td></td>
            <td>46</td>
            <td>182</td>
            <td>25.27%</td>
        </tr>
        <tr>
            <td class="rank">32</td>
            <td><a href="/u/U200714674">U200714674</a></td>
            <td></td>
            <td>45</td>
            <td>257</td>
            <td>17.51%</td>
        </tr>
        <tr>
            <td class="rank">33</td>
            <td><a href="/u/Apollo">Apollo</a></td>
            <td></td>
            <td>44</td>
            <td>163</td>
            <td>26.99%</td>
        </tr>
        <tr>
            <td class="rank">34</td>
            <td><a href="/u/cuiaoxiang">cuiaoxiang</a></td>
            <td></td>
            <td>43</td>
            <td>171</td>
            <td>25.15%</td>
        </tr>
        <tr>
            <td class="rank">35</td>
            <td><a href="/u/hust08t04">hust08t04</a></td>
            <td></td>
            <td>43</td>
            <td>92</td>
            <td>46.74%</td>
        </tr>
        <tr>
            <td class="rank">36</td>
            <td><a href="/u/danxin">danxin</a></td>
            <td></td>
            <td>43</td>
            <td>102</td>
            <td>42.16%</td>
        </tr>
        <tr>
            <td class="rank">37</td>
            <td><a href="/u/tmd">tmd</a></td>
            <td></td>
            <td>42</td>
            <td>206</td>
            <td>20.39%</td>
        </tr>
        <tr>
            <td class="rank">38</td>
            <td><a href="/u/Wedo">Wedo</a></td>
            <td></td>
            <td>42</td>
            <td>94</td>
            <td>44.68%</td>
        </tr>
        <tr>
            <td class="rank">39</td>
            <td><a href="/u/CStick">CStick</a></td>
            <td></td>
            <td>40</td>
            <td>115</td>
            <td>34.78%</td>
        </tr>
        <tr>
            <td class="rank">40</td>
            <td><a href="/u/aifreedom">aifreedom</a></td>
            <td></td>
            <td>40</td>
            <td>136</td>
            <td>29.41%</td>
        </tr>
        <tr>
            <td class="rank">41</td>
            <td><a href="/u/lkq1992yeah">lkq1992yeah</a></td>
            <td></td>
            <td>39</td>
            <td>121</td>
            <td>32.23%</td>
        </tr>
        <tr>
            <td class="rank">42</td>
            <td><a href="/u/hust08p34">hust08p34</a></td>
            <td></td>
            <td>38</td>
            <td>249</td>
            <td>15.26%</td>
        </tr>
        <tr>
            <td class="rank">43</td>
            <td><a href="/u/emperorlu">emperorlu</a></td>
            <td></td>
            <td>37</td>
            <td>141</td>
            <td>26.24%</td>
        </tr>
        <tr>
            <td class="rank">44</td>
            <td><a href="/u/zhymaoiing">zhymaoiing</a></td>
            <td></td>
            <td>37</td>
            <td>102</td>
            <td>36.27%</td>
        </tr>
        <tr>
            <td class="rank">45</td>
            <td><a href="/u/INFINITE_Li">INFINITE_Li</a></td>
            <td></td>
            <td>37</td>
            <td>159</td>
            <td>23.27%</td>
        </tr>
        <tr>
            <td class="rank">46</td>
            <td><a href="/u/Changing">Changing</a></td>
            <td></td>
            <td>35</td>
            <td>243</td>
            <td>14.40%</td>
        </tr>
        <tr>
            <td class="rank">47</td>
            <td><a href="/u/saren">saren</a></td>
            <td></td>
            <td>34</td>
            <td>162</td>
            <td>20.99%</td>
        </tr>
        <tr>
            <td class="rank">48</td>
            <td><a href="/u/yaya">yaya</a></td>
            <td></td>
            <td>34</td>
            <td>171</td>
            <td>19.88%</td>
        </tr>
        <tr>
            <td class="rank">49</td>
            <td><a href="/u/asmn">asmn</a></td>
            <td></td>
            <td>34</td>
            <td>55</td>
            <td>61.82%</td>
        </tr>
        <tr>
            <td class="rank">50</td>
            <td><a href="/u/sowhat">sowhat</a></td>
            <td></td>
            <td>34</td>
            <td>97</td>
            <td>35.05%</td>
        </tr>
    </tbody>
</table>
@stop