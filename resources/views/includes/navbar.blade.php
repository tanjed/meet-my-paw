
{{--<div class="pageloader"></div>--}}
{{--<div class="infraloader is-active"></div>--}}
<div class="app-overlay"></div>

<div id="main-navbar" class="navbar navbar-v1 is-inline-flex is-transparent no-shadow is-hidden-mobile">
    <div class="container is-fluid">
        <div class="navbar-brand">
            <a href="/" class="navbar-item">
                <img class="logo light-image" src="{{asset('assets/brand.png')}}" width="112" height="28" alt="">
{{--                <img class="logo dark-image" src="assets/img/logo/friendkit-white.svg" width="112" height="28" alt="">--}}
            </a>
        </div>
        <div class="navbar-menu">
            <div class="navbar-start">
                <!-- Navbar Search -->

                @if(Auth::check())
                    <div class="navbar-item is-icon drop-trigger">
                        <a class="icon-link" href="{{route('home')}}">
                            <i data-feather="home"></i>
                            <span class="indicator"></span>
                        </a>
                    </div>
                    <div class="navbar-item is-icon drop-trigger">
                        <a class="icon-link" href="{{route('show.profile',\Auth::user()->user_name)}}">
                            <i data-feather="user"></i>
                            <span class="indicator"></span>
                        </a>
                    </div>
                    <div class="navbar-item is-icon drop-trigger">
                        <a class="icon-link" href="{{route('show.dashboard')}}">
                            <i data-feather="clipboard"></i>
                            <span class="indicator"></span>
                        </a>
                    </div>
                    {{--        <div id="mobile-explorer-trigger" class="navbar-item is-icon">--}}
                    {{--            <a class="icon-link is-primary">--}}
                    {{--                <i class="mdi mdi-apps"></i>--}}
                    {{--            </a>--}}
                    {{--        </div>--}}

                    <div id="open-mobile-search" class="navbar-item is-icon">
                        <a class="icon-link is-primary" href="javascript:void(0);">
                            <i data-feather="search"></i>
                        </a>
                    </div>
                @endif
            </div>

            <div class="navbar-end">

                <div class="navbar-item">
                    <div id="global-search" class="control">
                        <input id="tipue_drop_input" class="input is-rounded" type="text" placeholder="Search" required>
                        <span id="clear-search" class="reset-search">
                            <i data-feather="x"></i>
                        </span>
                        <span class="search-icon">
                            <i data-feather="search"></i>
                        </span>

                        <div id="tipue_drop_content" class="tipue-drop-content"></div>
                    </div>

                </div>
                <div id="account-dropdown" class="navbar-item is-account drop-trigger has-caret">
                    <div class="user-image">
                        @if(isset(\Auth::user()->profile->profile_pic))
                        <img src="https://via.placeholder.com/400x400" data-demo-src="/images/user/profile_pic/{{ \Auth::user()->profile->profile_pic }}"
                            alt="">
                        <span class="indicator"></span>
                        @else
                        <img src="https://via.placeholder.com/400x400" data-demo-src="/assets/img/demo/groups/1.jpg"
                            alt="">
                        <span class="indicator"></span>
                        @endif
                    </div>

                    <div class="nav-drop is-account-dropdown">
                        <div class="inner">
                            <div class="nav-drop-header">
                                 <span class="username">Jenna Davis</span>
                                <label class="theme-toggle">
                                    <input type="checkbox">
                                    <span class="toggler">
                                        <span class="dark">
                                            <i data-feather="moon"></i>
                                        </span>
                                        <span class="light">
                                            <i data-feather="sun"></i>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            @if (\Auth::check())
                                <div class="nav-drop-body account-items">
                                    <a id="profile-link" href="{{route('show.profile',['user_name' => Auth::user()->user_name])}}" class="account-item">
                                        <div class="media">

                                            <div class="media-left">
                                                <div class="image">
                                                    @if(isset(\Auth::user()->profile->profile_pic))
                                                    <img src="https://via.placeholder.com/400x400" data-demo-src="/images/user/profile_pic/{{ \Auth::user()->profile->profile_pic }}"
                                                        alt="">
                                                    <span class="indicator"></span>
                                                    @else
                                                    <img src="https://via.placeholder.com/400x400" data-demo-src="/assets/img/demo/groups/1.jpg"
                                                        alt="">
                                                    <span class="indicator"></span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="media-content">
                                                <h3>{{ \Auth::user()->first_name }}</h3>
                                                <small>Main account</small>
                                            </div>
                                            <div class="media-right">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a id="profile-link" href="{{route('show.edit_profile')}}" class="account-item">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="check"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Edit Account</h3>
                                                <small>Update your profile.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="account-divider">

                                    <a class="account-item" id="profile-link" href="/logout">
                                        <div class="media">
                                            <div class="icon-wrap">
                                                <i data-feather="power"></i>
                                            </div>
                                            <div class="media-content">
                                                <h3>Log out</h3>
                                                <small>Log out from your account.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                           @else
                                <div class="nav-drop-body account-items">
                                <a id="profile-link" href="{{route('show.login')}}" class="account-item">
                                    <div class="media">
                                        <div class="icon-wrap">
                                            <i data-feather="check"></i>
                                        </div>
                                        <div class="media-content">
                                            <h3>Login</h3>
                                            <small>Sign in to profile.</small>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<nav class="navbar mobile-navbar is-hidden-desktop" aria-label="main navigation">
    <!-- Brand -->
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img class="logo light-image" src="{{asset('assets/brand.png')}}" width="50" height="28" alt="">
        </a>
        @if(Auth::check())
        <div class="navbar-item is-icon drop-trigger">
            <a class="icon-link" href="{{route('home')}}">
                <i data-feather="home"></i>
                <span class="indicator"></span>
            </a>
        </div>
        <div class="navbar-item is-icon drop-trigger">
            <a class="icon-link" href="{{route('show.profile',\Auth::user()->user_name)}}">
                <i data-feather="user"></i>
                <span class="indicator"></span>
            </a>
        </div>
        <div class="navbar-item is-icon drop-trigger">
            <a class="icon-link" href="{{route('show.dashboard')}}">
                <i data-feather="clipboard"></i>
                <span class="indicator"></span>
            </a>
        </div>
{{--        <div id="mobile-explorer-trigger" class="navbar-item is-icon">--}}
{{--            <a class="icon-link is-primary">--}}
{{--                <i class="mdi mdi-apps"></i>--}}
{{--            </a>--}}
{{--        </div>--}}

        <div id="open-mobile-search" class="navbar-item is-icon">
            <a class="icon-link is-primary" href="javascript:void(0);">
                <i data-feather="search"></i>
            </a>
        </div>
        @endif

        <!-- Mobile menu toggler icon -->
        <div class="navbar-burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Navbar mobile menu -->
    <div class="navbar-menu">
        <!-- Account -->
        <div class="navbar-item has-dropdown is-active">
            @if(\Illuminate\Support\Facades\Auth::check())
                <a href="{{route('show.profile',Auth::user()->user_name)}}" class="navbar-link">
                    <img src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/{{Auth::user()->profile->profile_pic}}" alt="">
                    <span class="is-heading">{{Auth::user()->first_name}}</span>
                </a>
            @endif

            <!-- Mobile Dropdown -->
            <div class="navbar-dropdown">
                <a href="" class="navbar-item is-flex is-mobile-icon">
                    <span><i data-feather="activity"></i>Feed</span>
                    <span class="menu-badge">87</span>
                </a>
                <a href="" class="navbar-item is-flex is-mobile-icon">
                    <span><i data-feather="play-circle"></i>Watch</span>
                    <span class="menu-badge">21</span>
                </a>
                <a href="" class="navbar-item is-flex is-mobile-icon">
                    <span><i data-feather="heart"></i>Friend Requests</span>
                    <span class="menu-badge">3</span>
                </a>
                <a href="" class="navbar-item is-flex is-mobile-icon">
                    <span><i data-feather="user"></i>Profile</span>
                </a>
                <a href="" class="navbar-item is-flex is-mobile-icon">
                    <span><i data-feather="shopping-cart"></i>Cart</span>
                    <span class="menu-badge">3</span>
                </a>
                <a href="#" class="navbar-item is-flex is-mobile-icon">
                    <span><i data-feather="bookmark"></i>Bookmarks</span>
                </a>
            </div>
        </div>

        <!-- More -->
        <div class="navbar-item has-dropdown">
            <!-- Mobile Dropdown -->
            <div class="navbar-dropdown">
                <a href="#" class="navbar-item is-flex is-mobile-icon">
                    <span><i data-feather="life-buoy"></i>Support</span>
                </a>
                <a href="" class="navbar-item is-flex is-mobile-icon">
                    <span><i data-feather="settings"></i>Settings</span>
                </a>

                @if(Auth::check())
                    <a href="{{route('logout')}}" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="log-out"></i>Logout</span>
                    </a>
                @else
                    <a href="{{route('show.login')}}" class="navbar-item is-flex is-mobile-icon">
                        <span><i data-feather="user"></i>Login</span>
                    </a>
                @endif
            </div>
        </div>
    </div>
    <!--Search-->
    <div class="mobile-search is-hidden">
        <div class="control">
            <input id="tipue_drop_input_mobile" class="input" placeholder="Search...">
            <div class="form-icon">
                <i data-feather="search"></i>
            </div>
            <div class="close-icon">
                <i data-feather="x"></i>
            </div>
            <div id="tipue_drop_content_mobile" class="tipue-drop-content"></div>
        </div>
    </div>
</nav>
