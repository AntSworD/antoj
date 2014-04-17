@yield('prettify_onload', '<body>')
    <div id="header" class="container" style="position:relative; display:block;">
        <div style="float:left;">
            <a href="/"><img src="/img/antoj_logo.png"></a>
        </div>
        <div class="Log" style="float:right;">
            <div style="text-align: right;">
                &nbsp;
            </div>
            @yield('login')
        </div>
    </div>
    <div class="container">
        <div id="nav" class="navbar navbar-inverse" role="navigation">
            <div class="nav-collapse" style="height:auto;">
                <ul class="nav navbar-nav col-md-9">
                    <li {{ Request::is('/') ? 'class="active"' : '' }}><a href="/">Home</a></li>
                    <li {{ (Request::is('/problemset*') || Request::is('problem*'))  ? 'class="active"' : '' }}><a href="/problemset">PROBLEMSET</a></li>
                    <li {{ (Request::is('contests*') || Request::is('contest*')) ? 'class="active"' : '' }}><a href="/contests">CONTESTS</a></li>
                    <li {{ Request::is('status*') ? 'class="active"' : '' }}><a href="/status">STATUS</a></li>
                    <li {{ Request::is('/rating*') ? 'class="active"' : '' }}><a href="/rating">RATING</a></li>
                    <li {{ Request::is('/faq*') ? 'class="active"' : '' }}><a href="/faq">F.A.Q</a></li>
@if (!Auth::check())
                    <li {{ Request::is('register') ? 'class="active"' : '' }}><a href="/register">REGISTER</a></li>
@endif
                </ul>
                <form action="" class="navbar-form navbar-right col-md-3">
                    <div class="form-group"><input type="text" name="" id=""></div>
                    <button type="submit" value="" class="btn btn-default">Search</button>
                </form>
            </div>
        </div>
