<!-- collapse menu button -->
<div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:" data-action="toggleMenu" title="Collapse Menu"><i
                            class="fa fa-reorder"></i></a> </span>
</div>
<!-- end collapse menu -->

<!-- #MOBILE -->
<!-- Top menu profile link : this shows only when top menu is active -->
<ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
    <li class="">
        <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown">
            <img src="/template/img/avatars/sunny.png" alt="John Doe" class="online"/>
        </a>
        <ul class="dropdown-menu pull-right">
            <li>
                <a href="javascript:" class="padding-10 padding-top-5 padding-bottom-5"><i
                            class="fa fa-cog"></i> Setting</a>
            </li>
            {{--<li class="divider"></li>--}}
            <li>
                <a href="#" class="padding-10 padding-top-5 padding-bottom-5"> <i
                            class="fa fa-user"></i> <u>P</u>rofile</a>
            </li>
            {{--<li class="divider"></li>--}}
            {{--<li>--}}
            {{--<a href="javascript:" class="padding-10 padding-top-0 padding-bottom-0"--}}
            {{--data-action="toggleShortcut"><i class="fa fa-arrow-down"></i> <u>S</u>hortcut</a>--}}
            {{--</li>--}}
            <li class="divider"></li>
            <li>
                <a href="#" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i
                            class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
            </li>
        </ul>
    </li>
</ul>

{{--<div id="logout" class="btn-header transparent pull-right">--}}
{{--<span><a href="#" title="Sign Out"><i class="fa fa-sign-out"></i></a></span>--}}
{{--</div>--}}

<!-- search mobile button (this is hidden till mobile view port) -->
<div id="search-mobile" class="btn-header transparent pull-right">
    <span> <a href="javascript:" title="Search"><i class="fa fa-search"></i></a> </span>
</div>
<!-- end search mobile button -->

<form action="#" class="header-search pull-right">
    <input id="search-fld" type="text" name="param" placeholder="Find reports and more">
    <button type="submit">
        <i class="fa fa-search"></i>
    </button>
    <a href="javascript:" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
</form>

<div id="fullscreen" class="btn-header transparent pull-right">
            <span> <a href="javascript:" data-action="launchFullscreen" title="Full Screen"><i
                            class="fa fa-arrows-alt"></i></a> </span>
</div>
