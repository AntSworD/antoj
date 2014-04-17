@extends('layouts.main')

@section('title')
Ant Online Judge
@stop

@include ('layouts.login')

@section('content')
        <div style="position:relative;">
            <div id="sidebar" class="col-md-3 showborder">
                <div class="caption titled">→ Top rated
                    <div class="top-links">
                    </div>
                </div>
                <table class="rtable ">
                    <tbody>
                        <tr>
                            <th class="left" style="width:2.25em;">#</th>
                            <th class="">User</th>
                            <th class="" style="width:5em;">Rating</th>
                        </tr>
                        <tr>
                            <td class="left dark">1</td>
                            <td class=" dark"><a href="#" title="tourist">tourist</a></td>
                            <td class=" dark">3141</td>
                        </tr>
                        <tr>
                            <td class="left ">2</td>
                            <td class=""><a href="#" title="rng_58">rng_58</a></td>
                            <td class="">2859</td>
                        </tr>
                        <tr>
                            <td class="left dark">3</td>
                            <td class=" dark"><a href="#" title="yeputons">yeputons</a></td>
                            <td class=" dark">2770</td>
                        </tr>
                        <tr>
                            <td class="left ">4</td>
                            <td class=""><a href="#" title="Petr">Petr</a></td>
                            <td class="">2764</td>
                        </tr>
                        <tr>
                            <td class="left dark">5</td>
                            <td class=" dark"><a href="#" title="Egor">Egor</a></td>
                            <td class=" dark">2736</td>
                        </tr>
                        <tr>
                            <td class="left ">6</td>
                            <td class=""><a href="#" title="PavelKunyavskiy">PavelKunyavskiy</a></td>
                            <td class="">2722</td>
                        </tr>
                        <tr>
                            <td class="left dark">7</td>
                            <td class=" dark"><a href="#" title="0O0o00OO0Oo0o0Oo">0O0o00OO0Oo0o0Oo</a></td>
                            <td class=" dark">2718</td>
                        </tr>
                        <tr>
                            <td class="left ">8</td>
                            <td class=""><a href="#" title="scott_wu">scott_wu</a></td>
                            <td class="">2702</td>
                        </tr>
                        <tr>
                            <td class="left dark">9</td>
                            <td class=" dark"><a href="#" title="WJMZBMR">WJMZBMR</a></td>
                            <td class=" dark">2673</td>
                        </tr>
                        <tr>
                            <td class="left bottom">10</td>
                            <td class="bottom"><a href="#" title="meret">meret</a></td>
                            <td class="bottom">2655</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="content" class="col-md-9 showborder">
                <h1>
                    Welcome to Ant Online Judge System <br>
                    <br>
                </h1>
                <p>
                    Forgot Password ? Just Click here <br>
                    To see AntOJ Problem Index by Source,Just Click here <br>
                    To see AntOJ Problem Index by Type,Just Click here <br>
                    To see Ant ACM/ICPC Teams Honors, Just Click Here <br>
                    To see some Ant-TEAM's photos, Just Click Here. <br>
                    We provide some softwares and documents, to download them, Just Click Here. <br>
                    If you want to publish your problems or setup your own online contest, just Contact Us. <br>
                </p>
            </div>
        </div>
@stop