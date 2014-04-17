<h3 class="page-title">{{ $contest->title }}</h3>
<div class="contest-info">
    Start Time:<span class="label label-success">{{ $contest->start_time }}</span>
    End Time:<span class="label label-danger">{{ $contest->end_time }}</span>
    Server Time:<span class="label label-warning">{{ date('Y-m-d H:i:s') }}</span>
    Contest Type:<span class="label label-info">{{ $contest->type }}</span>
</div>
<ul class="nav nav-pills contest-nav" id="fn-nav">
    <li <?php if (Request::is('contest/show*')):?> class="active" <?php endif;?>>
        <a href="/contest/show/{{ $contest->contest_id }}">Problems</a>
    </li>
    <li <?php if (Request::is('contest/standing*')):?> class="active" <?php endif;?>>
        <a href="/contest/standing/{{ $contest->contest_id }}">Standing</a>
    </li>
    <li <?php if (Request::is('contest/statistics*')):?> class="active" <?php endif;?>>
        <a href="/contest/statistic/{{ $contest->contest_id }}">Statistics</a>
    </li>
    <li <?php if (Request::is('contest/status*')):?> class="active" <?php endif;?>>
        <a href="/status?cid={{ $contest->contest_id }}">Status</a>
    </li>
    <li <?php if (Request::is('contest/discuss*')):?> class="active" <?php endif;?>>
        <a href="/contest/discus/{{ $contest->contest_id }}">Discuss</a>
    </li>
</ul>