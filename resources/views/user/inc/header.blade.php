<!--  BEGIN NAVBAR  -->
<div class="header-container">
    <header class="header navbar navbar-expand-sm">

        <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-menu">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </a>

        <div class="
{{--        nav-logo align-self-center--}}
            ">

            <a class="navbar-brand" href="{{url('/')}}">
                <img style="max-width: 38% !important;" alt="logo image" src="@if(request()->session()->get('lang') == 'ja' ) {{asset('assets/images/logo/logo.png')}} @else {{asset('assets/images/logo/logo-pt.png')}} @endif">
                <span class="navbar-brand-name"></span></a>
        </div>

        <ul class="navbar-item flex-row mr-auto">
            <!--<li class="nav-item align-self-center search-animated">-->
            <!--    <form class="form-inline search-full form-inline search" role="search">-->
            <!--        <div class="search-bar">-->
            <!--            <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">-->
            <!--        </div>-->
            <!--    </form>-->
            <!--    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>-->
            <!--</li>-->
        </ul>

        <ul class="navbar-item flex-row nav-dropdowns">



            <li class="nav-item dropdown language-dropdown more-dropdown">
                <div class="dropdown custom-dropdown-icon">
                    <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        @if(session()->get('lang')=='pt-br')
                            <img src="{{url('/')}}/assets/images/1560174834.png" class="flag-width img-thumbnail" alt="flag">
                            <span class="ml-1">Português</span>
                        @else
                            <img src="{{url('/')}}/assets/images/1560174798.png"  class="flag-width img-thumbnail" alt="flag">
                            <span class="ml-1">日本語</span>

                        @endif

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="customDropdown">
                        @if(session()->get('lang')=='pt-br')
                            <a class="dropdown-item"  href="{{url('/')}}/change-lang/ja" class=" active ">
                                <img src="{{url('/')}}/assets/images/1560174798.png"  class="flag-width"  style="max-width: 22px">
                                日本語
                            </a>
                        @else

                            <a class="dropdown-item"  href="{{url('/')}}/change-lang/pt-br" class="">
                                <img src="{{url('/')}}/assets/images/1560174834.png" class="flag-width"  style="max-width: 22px">
                                Português
                            </a>
                        @endif



                    </div>
                </div>
            </li>

            <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media">

                        <img class="img-fluid"
                             src="@if(Auth::user()->image) {{ asset('assets/images/user') .'/'. Auth::user()->image }} @else {{ asset('assets/images/user/no_user.png') }} @endif">
                        <div class="media-body align-self-center">
                            @if(!Auth::guest())
                                <h6><span>Hi,</span> {{auth()->user()->name}}</h6>
                            @endif
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-chevron-down">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>
                <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="user-profile-dropdown">
                    <div class="">
                        <div class="dropdown-item">
                            <a class="" href="{{route('user.profile')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>@lang('user_profile.Profile')</a>
                        </div>

                        <div class="dropdown-item">
                            <a class="" href="{{route('support.index.customer')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path
                                        d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                                </svg>
                                @lang('support_tickets.Inbox')</a>
                        </div>
                        {{--                        <div class="dropdown-item">--}}
                        {{--                            <a class="" href="auth_lockscreen.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> Lock Screen</a>--}}
                        {{--                        </div>--}}
                        <div class="dropdown-item">
                            <a class="" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                @lang('home_page.Logout')</a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                        </div>
                    </div>
                </div>

            </li>
        </ul>
    </header>
</div>

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN TOPBAR  -->
    <!--  BEGIN TOPBAR  -->
    <div class="topbar-nav header navbar" role="banner">
        <nav id="topbar">
            <ul class="navbar-nav theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="{{route('root')}}">
                        <img style="max-width: 100% !important;"  src="@if(request()->session()->get('lang') == 'ja' ) {{asset('assets/images/logo/logo.png')}} @else {{asset('assets/images/logo/logo-pt.png')}} @endif"  class="navbar-logo" alt="logo">
                    </a>
                </li>

            </ul>

            <ul class="list-unstyled menu-categories" id="topAccordion">

                <li class="menu single-menu active">
                    <a href="{{route('home')}}">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span>@lang('user_dashboard.Dashboard')</span>
                        </div>

                    </a>

                </li>
                <li class="menu single-menu">
                    <a href="#Schedule" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        <div class="">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-calendar">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span> @lang('schedules.Schedule')</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="Schedule" data-parent="#topAccordion">
                        <li>
                            <a href="{{ route('schedule') }}"> @lang('schedules.Book a Schedule') </a>
                        </li>
                        <li>
                            <a href="{{route('front.schedule.list')}}"> @lang('schedules.My Schedules List') </a>
                        </li>

                    </ul>

                </li>


                <li class="menu single-menu">
                    <a href="#Investment" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-file-plus">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="12" y1="18" x2="12" y2="12"></line>
                                <line x1="9" y1="15" x2="15" y2="15"></line>
                            </svg>
                            <span>@lang('plan.Cashback')</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="Investment" data-parent="#topAccordion">
                        <li>
                            <a href="{{route('user.interest.log')}}"> @lang('plan.Return Interest Log') </a>
                        </li>
                    </ul>
                </li>

                <li class="menu single-menu">
                    <a href="#Deposit" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-layout">
                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                <line x1="9" y1="21" x2="9" y2="9"></line>
                            </svg>
                            <span>@lang('deposit.Deposit')</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="Deposit" data-parent="#topAccordion">
                        <li>
                            <a href="{{route('user.deposit')}}">@lang('deposit.Deposit Now')</a>
                        </li>
                        <li class="sub-sub-submenu-list active">
                            <a href="{{route('pin.recharge')}}" class="dropdown-toggle">@lang('deposit.E-Pin Recharge')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right"></svg>
                            </a>

                        </li>
                        <li class="sub-sub-submenu-list active">
                            <a href="{{route('user.deposit.history')}}"
                               class="dropdown-toggle"> @lang('deposit.Deposit History')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right"></svg>
                            </a>

                        </li>
                    </ul>
                </li>
                <li class="menu single-menu">
                    <a href="#Withdraw" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-navigation">
                                <polygon points="3 11 22 2 13 21 11 13 3 11"></polygon>
                            </svg>
                            <span>	@lang('withdraw.Withdraw')</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="Withdraw" data-parent="#topAccordion">
                        <li>
                            <a href="{{route('user.withdraw')}}">@lang('withdraw.Withdraw Now')</a>
                        </li>
                        <li class="sub-sub-submenu-list active">
                            <a href="{{route('withdraw.history')}}" class="dropdown-toggle">@lang('withdraw.Withdraw History')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right"></svg>
                            </a>

                        </li>

                    </ul>
                </li>

                <li class="menu single-menu">
                    <a href="#Transaction" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-server">
                                <rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect>
                                <rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect>
                                <line x1="6" y1="6" x2="6.01" y2="6"></line>
                                <line x1="6" y1="18" x2="6.01" y2="18"></line>
                            </svg>
                            <span>		@lang('affiliate.Transaction')</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="Transaction" data-parent="#topAccordion">
                        <li>
                            <a href="{{route('user.balance.transfer')}}"
                               class="dropdown-toggle">@lang('affiliate.Balance Transfer')</a>
                        </li>
                        <li>
                            <a href="{{route('user.transaction')}}"
                               class="dropdown-toggle">@lang('affiliate.Transaction History')</a>
                        </li>
                        <li class="sub-sub-submenu-list ">
                            <a href="{{route('my.referral.com')}}" class="dropdown-toggle">@lang('affiliate.Referral Statistic')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right"></svg>
                            </a>

                        </li>
                        <li class="sub-sub-submenu-list ">
                            <a href="{{route('user.referral.com')}}"
                               class="dropdown-toggle">@lang('affiliate.Referral Commission')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right"></svg>
                            </a>

                        </li>

                    </ul>
                </li>
                <li class="menu single-menu">
                    <a href="#profile" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-radio">
                                <circle cx="12" cy="12" r="2"></circle>
                                <path
                                    d="M16.24 7.76a6 6 0 0 1 0 8.49m-8.48-.01a6 6 0 0 1 0-8.49m11.31-2.82a10 10 0 0 1 0 14.14m-14.14 0a10 10 0 0 1 0-14.14"></path>
                            </svg>
                            @if(!Auth::guest())
                                <span>{{ Auth::user()->name }}</span>

                            @endif
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="profile" data-parent="#topAccordion">
                        <li>
                            <a href="{{route('user.profile')}}" class="dropdown-toggle">@lang('user_profile.Profile')</a>
                        </li>
                        <li>
                            <a href="{{route('user.album')}}" class="dropdown-toggle">@lang('user_profile.Album')</a>
                        </li>
                        <li class="sub-sub-submenu-list ">
                            <a href="{{route('support.index.customer')}}"
                               class="dropdown-toggle">@lang('support_tickets.Support Ticket')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right"></svg>
                            </a>

                        </li>
                        <li class="sub-sub-submenu-list ">
                            <a href="{{route('share.user')}}"
                               class="dropdown-toggle">@lang('user_dashboard.Share (Post)')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right"></svg>
                            </a>

                        </li>
                        <li class="sub-sub-submenu-list ">
                            <a href="https://www.llacuna.me"  target="_blank"
                               class="dropdown-toggle">@lang('user_dashboard.Marketplace')
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-chevron-right"></svg>
                            </a>

                        </li>
                        {{--                        <li class="sub-sub-submenu-list ">--}}
                        {{--                            <a href="{{route('two.factor.index')}}"  class="dropdown-toggle" >@lang('2Fa Security')<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"></svg> </a>--}}

                        {{--                        </li>--}}

                    </ul>
                </li>

                <li class="menu single-menu">

                    <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle autodroprown">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span class="small-text">@lang('cps_dashboard.Slot-Trader')</span>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#topAccordion">
                        <li>
                            <a href="{{route('user.cps.dashboard')}}">@lang('cps_dashboard.Slot Dashboard')</a>
                        </li>
                        <li>
                            <a href="{{route('users.gift.list')}}"> @lang('cps_dashboard.Voucher List') </a>
                        </li>
                        <li>
                            <a href="{{route('users.withdraw.list')}}"> @lang('cps_dashboard.Slot Withdraw') </a>
                        </li>
                        <li>
                            <a href="{{route('user.my_packages')}}"> @lang('cps_dashboard.My Packages') </a>
                        </li>
                    </ul>
                </li>


            </ul>

        </nav>
    </div>
    <!--  END TOPBAR  -->
