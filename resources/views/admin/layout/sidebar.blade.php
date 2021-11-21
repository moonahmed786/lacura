<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" class="img-circle" src="{{asset('assets/admin/img/'.Auth::guard('admin')->user()->image)}}" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">{{ Auth::guard('admin')->user()->name }} </p>
            <p class="app-sidebar__user-designation">{{ Auth::guard('admin')->user()->username }}</p>
        </div>
    </div>
    <ul class="app-menu">
        <li class="treeview @if(request()->path() == 'admin/gift/list') is-expanded
                            @elseif(request()->path() == 'admin/cps/index') is-expanded
                            @elseif(request()->path() == 'admin/subscribed/packages') is-expanded
                            @elseif(request()->path() == 'admin/slotpackages') is-expanded
                            @elseif(request()->path() == 'admin/module/language/manager/cps_dashboard/Slot%20Trader%20Mining/user.cps.index') is-expanded
                            @endif ">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-newspaper-o"></i><span class="app-menu__label">Slot Trader Mining</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(request()->path() == 'admin/subscribed/packages') active @endif" href="{{route('admin.user.subscribed')}}" ><i class="icon fa fa-user"></i>User Subscribed Packages</a></li>
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/slot/trader/dashboard') active @endif" href="{{route('slots.dashboard')}}" ><i class="icon fa fa-plus"></i>Slot Trader Dashboard</a></li>--}}

                <li><a class="treeview-item @if(request()->path() == 'admin/slotpackages') active @endif" href="{{route('slotpackages.index')}}" ><i class="icon fa fa-list"></i>Packages</a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/gift/list') active @endif" href="{{route('admin.gift.list')}}" ><i class="icon fa fa-ticket"></i>Voucher Codes</a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/cps/index') active @endif" href="{{route('admin.cps.dashboard')}}" ><i class="icon fa fa-dropbox"></i>Withdraws</a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/module/language/manager/cps_dashboard/Slot%20Trader%20Mining/user.cps.index' || request()->route()->getName() == 'language-key') active @endif" href="{{route('module.language-manage',['cps_dashboard','Slot Trader Mining','user.cps.index'])}}"><i class="icon fa fa-language"></i>Translations </a></li>
            </ul>
        </li>
        @php $adminid = Auth::guard('admin')->user()->id @endphp
        @php $adminroles = \DB::table('admin_roles')->where('admin_id', $adminid)->pluck('admin_feature_id')->toArray() @endphp
{{--        <li><a class="app-menu__item @if(request()->path() == 'admin/gift/list') active @endif" href="{{route('admin.gift.list')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Gift Codes</span></a></li>--}}
{{--        <li><a class="app-menu__item @if(request()->path() == 'admin/cps/index') active @endif" href="{{route('admin.cps.dashboard')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">CPS Withdraws</span></a></li>--}}

        @if($adminid == 1 or in_array(1, $adminroles) == true)
        <li  class="treeview @if(request()->path() == 'admin/home') is-expanded
                            @elseif(request()->path() == 'admin/module/language/manager/user_dashboard/User%20Dashboard/home') is-expanded
                            @endif"        >
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-buysellads"></i><span class="app-menu__label">Dashboard</span><i class="app-menu__icon fa fa-dashboard"></i></a>
            <ul class="treeview-menu">
                <li><a class="app-menu__item @if(request()->path() == 'admin/home') active @endif
                        " href="{{url('admin/home')}}">
                        <i class="icon fa fa-sitemap"></i> Admin Dashboard</a></li>

                <li><a class="treeview-item @if(request()->path() == 'admin/module/language/manager/user_dashboard/User%20Dashboard/home') active @endif" href="{{route('module.language-manage',['user_dashboard','User Dashboard','home'])}}"><i class="icon fa fa-language"></i>User Dashboard Translations </a></li>
            </ul>

        </li>

        @endif
        @if($adminid == 1 or in_array(2, $adminroles) == true)
        <li class="treeview @if(request()->path() == 'admin/referral') is-expanded
                            @elseif(request()->path() == 'admin/referral/log') is-expanded
                            @elseif(request()->path() == 'admin/referral/log/search') is-expanded
                            @endif">
        <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-buysellads"></i><span class="app-menu__label">Affiliate</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item @if(request()->path() == 'admin/referral') active @endif" href="{{ route('referral.index')  }}"><i class="icon fa fa-sitemap"></i>Referral Levels</a></li>
            <li><a class="treeview-item @if(request()->path() == 'admin/referral/log') active @elseif(request()->path() == 'admin/referral/log/search') active @endif" href="{{ route('referral.log')  }}"><i class="icon fa fa-history"></i>Referral Logs</a></li>
            <li><a class="treeview-item @if(request()->path() == 'admin/module/language/manager/affiliate/Affiliate/user.referral.com.adjust' || request()->route()->getName() == 'language-key') active @endif" href="{{route('module.language-manage',['affiliate','Affiliate','my.referral.com'])}}"><i class="icon fa fa-language"></i>Translations </a></li>
        </ul>
        </li>

        @endif

        @php $comming_schedule = \App\Schedule::where('status', 1)->whereDate('date', '>', \Carbon\Carbon::today())->count() @endphp

        @if($adminid == 1 or in_array(3, $adminroles) == true)

            <li class="treeview  @if(request()->path() == 'admin/schedule') is-expanded
                                    @elseif(request()->path() == 'admin/schedule/search') is-expanded
                                    @elseif(request()->path() == 'admin/module/language/manager/schedules/Schedules/schedule') is-expanded
                                    @endif" href="{{url('admin/schedule')}} ">
                <a class="app-menu__item " href="#" data-toggle="treeview"><i class="app-menu__icon fa  fa-calendar "></i><span class="app-menu__label">Schedules @if($comming_schedule > 0) <span class="badge badge-danger">{{ $comming_schedule }}</span> @endif</span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item @if(request()->path() == 'admin/schedule') active
                                    @elseif(request()->path() == 'admin/schedule/search') active
                                    @endif" href="{{url('admin/schedule')}}" ><i class="icon fa  fa-newspaper-o"></i>Schedules List </a></li>

                    <li>
                        <a class="treeview-item @if(request()->path() == 'admin/module/language/manager/schedules/Schedules/schedule' || request()->route()->getName() == 'language-key') active @endif"
                           href="{{route('module.language-manage',['schedules','Schedules','schedule'])}}"><i
                                class="icon fa fa-language"></i>Schedules Translations </a></li>
                </ul>
            </li>







{{--        <li><a class="app-menu__item @if(request()->path() == 'admin/schedule') active--}}
{{--                                    @elseif(request()->path() == 'admin/schedule/search') active--}}
{{--                                    @endif" href="{{url('admin/schedule')}}"><i class="app-menu__icon fa fa-calendar"></i><span class="app-menu__label">Schedules @if($comming_schedule > 0) <span class="badge badge-danger">{{ $comming_schedule }}</span> @endif </span></a></li>--}}

        @endif

        @php $reqyy = \App\Deposit::where('type', 'bank')->where('status', 0)->count() @endphp

        @if($adminid == 1 or in_array(4, $adminroles) == true)

        <li class="treeview @if(request()->route()->getName() == 'admin.gateway') is-expanded
                            @elseif(request()->route()->getName() == 'bank.gateway.index') is-expanded
                            @elseif(request()->route()->getName() == 'pending.request.deposit') is-expanded
                            @elseif(request()->route()->getName() == 'reject.request.deposit') is-expanded
                            @elseif(request()->route()->getName() == 'approve.request.deposit') is-expanded
                            @elseif(request()->route()->getName() == 'all.deposit.history') is-expanded
                            @elseif(request()->path() == 'admin/module/language/manager/deposit/Deposit/user.deposit') is-expanded
                            @endif">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-money"></i><span class="app-menu__label">Deposit Methods @if($reqyy == 0)  @else<span class="badge badge-danger">{{$reqyy}} </span>@endif</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(request()->route()->getName() == 'admin.gateway') active @endif" href="{{route('admin.gateway')}}"><i class="icon fa fa-magic"></i>Automatic Deposit Methods</a></li>
                <li><a class="treeview-item @if(request()->route()->getName() == 'bank.gateway.index') active @endif" href="{{route('bank.gateway.index')}}"><i class="icon fa fa-cc-diners-club"></i>Bank Deposit Methods</a></li>
                <li><a class="treeview-item @if(request()->route()->getName() == 'pending.request.deposit') active @endif" href="{{route('pending.request.deposit')}}"><i class="icon fa fa-spinner"></i>Pending Bank Deposits &nbsp; @if($reqyy == 0)  @else<span class="badge badge-danger">{{$reqyy}} </span>@endif</a></li>
                <li><a class="treeview-item @if(request()->route()->getName() == 'approve.request.deposit') active @endif" href="{{route('approve.request.deposit')}}"><i class="icon fa fa-check"></i>Approved Bank Deposits</a></li>
                <li><a class="treeview-item @if(request()->route()->getName() == 'reject.request.deposit') active @endif" href="{{route('reject.request.deposit')}}"><i class="icon fa fa-times"></i>Rejected Bank Deposit</a></li>
                <li><a class="treeview-item @if(request()->route()->getName() == 'all.deposit.history') active @endif" href="{{route('all.deposit.history')}}"><i class="icon fa fa-history"></i>All Deposit History</a></li>
                <li>
                    <a class="treeview-item @if(request()->path() == "admin/module/language/manager/deposit/Deposit/user.deposit") active @endif"
                       href="{{route('module.language-manage',['deposit','Deposit','user.deposit'])}}"><i
                            class="icon fa fa-language"></i>Deposit Translations </a></li>
            </ul>
        </li>
        @endif

        @if($adminid == 1 or in_array(5, $adminroles) == true)
        <!-- OLD E-PIN  -->
        @endif

        @if($adminid == 1 or in_array(6, $adminroles) == true)

        <li class="treeview @if(request()->path() == 'admin/time') is-expanded
                            @elseif(request()->path() == 'admin/plan') is-expanded
                            @elseif(request()->path() == 'admin/plan/create') is-expanded
                            @elseif(request()->path() == 'admin/module/language/manager/plan/Plan%20Page/user.interest.log') is-expanded
                            @elseif(request()->route()->getName() == 'plan.edit') is-expanded
                            @endif">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-clone"></i><span class="app-menu__label"> Plan Management</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(request()->path() == 'admin/time') active @endif" href="{{ route('time.index')  }}"><i class="icon fa fa-clock-o"></i>Time Setting </a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/plan') active @elseif(request()->path() == 'admin/plan/create') active @elseif(request()->route()->getName() == 'plan.edit') active @endif" href="{{route('plan.index')}}"><i class="icon fa fa-briefcase"></i>Manage Plan</a></li>
                <li><a class="treeview-item @if(request()->path()=='admin/module/language/manager/plan/Plan%20Page/user.interest.log')active @endif" href="{{route('module.language-manage',['plan','Plan Page','user.interest.log'])}}"><i class="icon fa fa-language"></i>Translations </a></li>
            </ul>
        </li>
        @endif
        @if($adminid == 1)
        <li class="treeview @if(request()->routeIs('smm*')) is-expanded @endif" style="display:none">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-line-chart"></i><span class="app-menu__label">Social Media Marketing</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(request()->routeIs('smm')) active @endif" href="{{ route('smm')  }}"><i class="icon fa fa-circle-o"></i>Category</a></li>
                <li><a class="treeview-item @if(request()->routeIs('smm.service') || request()->routeIs('smm.service.create') || request()->routeIs('smm.service.edit')) active @endif" href="{{route('smm.service')}}"><i class="icon fa fa-briefcase"></i>Services</a></li>
                <li><a class="treeview-item @if(request()->routeIs('smm.service.pending')) active @endif" href="{{route('smm.service.pending')}}"><i class="icon fa fa-exclamation-triangle"></i>Pending Services</a></li>
                <li><a class="treeview-item @if(request()->routeIs('smm.service.running')) active @endif" href="{{route('smm.service.running')}}"><i class="icon fa fa-spinner"></i>Running Services</a></li>
                <li><a class="treeview-item @if(request()->routeIs('smm.service.reject')) active @endif" href="{{route('smm.service.reject')}}"><i class="icon fa fa-times-circle-o"></i>Rejected Services</a></li>
                <li><a class="treeview-item @if(request()->routeIs('smm.service.complete')) active @endif" href="{{route('smm.service.complete')}}"><i class="icon fa fa-check"></i>Completed Services</a></li>
                <li><a class="treeview-item @if(request()->routeIs('smm.service.all')) active @endif" href="{{route('smm.service.all')}}"><i class="icon fa fa-window-maximize"></i>All Services</a></li>
            </ul>
        </li>
        @endif

        @if($adminid == 1 or in_array(7, $adminroles) == true)
        <li class="treeview @if(request()->path() == 'admin/knowledge-base/create') is-expanded
                            @elseif(request()->path() == 'admin/knowledge-base'|| request()->route()->getName() == 'knowledge-base.edit') is-expanded
                            @endif">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-newspaper-o"></i><span class="app-menu__label">News Blog</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(request()->path() == 'admin/knowledge-base/create') active @endif" href="{{ route('knowledge-base.create')  }}"><i class="icon fa fa-plus"></i>Add </a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/knowledge-base' || request()->route()->getName() == 'knowledge-base.edit') active @endif" href="{{ route('knowledge-base.index')  }}"><i class="icon fa fa-edit"></i>Manage </a></li>
            </ul>
        </li>
        @endif
        @if($adminid == 1 or in_array(8, $adminroles) == true)

        <li class="treeview @if(request()->path() == 'admin/mini/categories') is-expanded
        @elseif(request()->path() == 'admin/mini/categories') is-expanded
        @elseif(request()->path() == 'admin/addminiblogposts') is-expanded
        @elseif(request()->path() == 'admin/manageminiblogposts') is-expanded
@endif
            ">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-newspaper-o"></i><span class="app-menu__label">Mini Blog</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(request()->path()=='admin/mini/categories') active @endif" href="{{ route('addCategories')  }}"><i class="icon fa fa-plus"></i>Categories Manage</a></li>
                <li><a class="treeview-item @if(request()->path()=='admin/addminiblogposts') active @endif" href="{{ route('addminiblogposts')  }}"><i class="icon fa fa-plus"></i>Add </a></li>
                <li><a class="treeview-item @if(request()->path()=='admin/manageminiblogposts') active @endif" href="{{ route('manageblogposts')}}"><i class="icon fa fa-edit"></i>Manage </a></li>
                <li><a class="treeview-item @if(request()->path()=='admin/module/language/manager/Terms/Terms%20Pages/menu.index.front')active @endif" href="{{route('module.language-manage',['miniblog','Mini Blog Page','user.referral.com'])}}"><i class="icon fa fa-language"></i>Translations </a></li>
            </ul>
        </li>
        @endif

        @if($adminid == 1 or in_array(9, $adminroles) == true)
        <li class="treeview
@if(request()->path() == 'admin/module/language/manager/Terms/Terms%20Pages/menu.index.front') is-expanded
@elseif(request()->path() == 'admin/terms') is-expanded
                            @elseif(request()->path() == 'admin/terms/create' || request()->route()->getName() == 'terms.edit') is-expanded
                            @endif">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-clone"></i><span class="app-menu__label"> Manage Terms</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(request()->path() == 'admin/terms/create') active @endif" href="{{ route('terms.create')  }}"><i class="icon fa fa-plus"></i>Add </a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/terms'|| request()->route()->getName() == 'terms.edit') active @endif" href="{{ route('terms.index')  }}"><i class="icon fa fa-edit"></i>Manage </a></li>
                <li><a class="treeview-item @if(request()->path()=='admin/module/language/manager/Terms/Terms%20Pages/menu.index.front')active @endif" href="{{route('module.language-manage',['Terms','Terms Pages','menu.index.front'])}}"><i class="icon fa fa-language"></i>Translations </a></li>

            </ul>
        </li>

        @endif

        @if($adminid == 1 or in_array(10, $adminroles) == true)

        <li class="treeview @if(request()->path() == 'admin/active/users') is-expanded
                            @elseif(request()->path() == 'admin/deactive/users') is-expanded
                            @elseif(request()->path() == 'admin/sms/verified/users') is-expanded
                            @elseif(request()->path() == 'admin/all/users') is-expanded
                            @elseif(request()->path() == 'admin/email/verified/users') is-expanded
                            @elseif(request()->path() == 'admin/module/language/manager/auth_pages/User%20Auth%20Pages/login') is-expanded
                            @elseif(request()->path() == 'admin/users/questionnaires/list') is-expanded
                            @elseif(request()->path() == 'admin/module/language/manager/user_profile/User%20Profile/user.profile') is-expanded
                            @endif">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label"> Manage Users</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(request()->path() == 'admin/all/users' || request()->route()->getName() == 'user.view') active @endif" href="{{ route('all.user')  }}"><i class="icon fa fa-users"></i> All Users </a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/active/users') active @endif" href="{{ route('active.user')  }}"><i class="icon fa fa-check"></i> Active Users </a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/deactive/users') active @endif" href="{{ route('deactive.user')  }}"><i class="icon fa fa-ban"></i>Banned Users </a></li>
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/email/verified/users') active @endif" href="{{ route('total.email.verified')  }}"><i class="icon fa fa-envelope"></i>Email Unverified Users </a></li>--}}
                <li><a class="treeview-item @if(request()->path() == 'admin/users/questionnaires/list') active @endif" href="{{ route('users-questionnaires-list')  }}"><i class="icon fa fa-users"></i> User Questionnaire </a></li>

                <li><a class="treeview-item @if(request()->path()=='admin/module/language/manager/user_profile/User%20Profile/user.profile')active @endif" href="{{route('module.language-manage',['user_profile','User Profile','user.profile'])}}"><i class="icon fa fa-language"></i>User Profile Translations </a></li>
                <li><a class="treeview-item @if(request()->path()=='admin/module/language/manager/auth_pages/User%20Auth%20Pages/login')active @endif" href="{{route('module.language-manage',['auth_pages','User Auth Pages','login'])}}"><i class="icon fa fa-language"></i>User Auth Pages Translations </a></li>


            </ul>
        </li>
        @endif

        @if($adminid == 1 or in_array(11, $adminroles) == true)
        <li class="treeview @if(request()->path()=="admin/addnewadmin") is-expanded
                @elseif(request()->path()=="admin/alladmins") is-expanded
@endif">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-newspaper-o"></i><span class="app-menu__label">Manage Admins</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu ">
                <li><a class="treeview-item  @if(request()->path()=="admin/addnewadmin") active @endif" href="{{ route('addnewadmin')  }}"><i class="icon fa fa-plus"></i>Add Admin</a></li>
                <li><a class="treeview-item @if(request()->path()=="admin/alladmins") active @endif " href="{{ route('alladmins')}}"><i class="icon fa fa-users"></i>All Admins </a></li>
            </ul>
        </li>
        @endif

        @if($adminid == 1 or in_array(11, $adminroles) == true)
        <li class="treeview @if(request()->path()=='admin/homecomments') is-expanded @endif">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-newspaper-o"></i><span class="app-menu__label">Manage Comments</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(request()->path()=='admin/homecomments') active @endif" href="{{ route('homecomments')}}"><i class="icon fa fa-edit"></i>All Comments </a></li>
            </ul>
        </li>
        @endif

        @php $req = \App\Withdraw::where('status', 0)->count() @endphp

        @if($adminid == 1 or in_array(12, $adminroles) == true)
        <li class="treeview @if(request()->path() == 'admin/withdraw_method') is-expanded
                            @elseif(request()->path() == 'admin/withdraw/request') is-expanded
                            @elseif(request()->path() == 'admin/approved/withdraw') is-expanded
                            @elseif(request()->path() == 'admin/rejected/withdraw') is-expanded
                            @elseif(request()->path() == 'admin/withdraw/log') is-expanded
                            @elseif(request()->path() == 'admin/module/language/manager/withdraw/Withdraw/user.withdraw') is-expanded
                            @endif">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-money"></i><span class="app-menu__label"> Withdraw System  @if($req == 0)  @else<span class="badge badge-danger">{{$req}} </span>@endif  </span> <i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(request()->path() == 'admin/withdraw_method') active @endif" href="{{ route('withdraw_method.index')  }}"><i class="icon fa fa-window-maximize"></i> Withdraw Methods </a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/withdraw/request') active @endif" href="{{ route('withdraw.request')  }}"><i class="icon fa fa-spinner"></i>Withdraw Requests &nbsp; @if($req == 0)  @else<span class="badge badge-danger">{{$req}} </span>@endif </a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/approved/withdraw') active @endif" href="{{ route('approved.withdraw')  }}"><i class="icon fa fa-check"></i> Approved Withdraw </a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/rejected/withdraw') active @endif" href="{{ route('rejected.withdraw')  }}"><i class="icon fa fa-times"></i> Rejected Withdraw </a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/withdraw/log') active @endif" href="{{ route('withdraw.log')  }}"><i class="icon fa fa-eye"></i> View Log </a></li>


                <li><a class="treeview-item @if(request()->path() == 'admin/module/language/manager/withdraw/Withdraw/user.withdraw')active @endif" href="{{route('module.language-manage',['withdraw','Withdraw','user.withdraw'])}}"><i class="icon fa fa-language"></i>Withdraw Translations </a></li>
            </ul>
        </li>
        @endif

        @if($adminid == 1 or in_array(13, $adminroles) == true)

        <li class="treeview @if(request()->routeIs('gallery.*') || request()->path() == 'admin/gallery/upload'||'admin/module/language/manager/album/Album%20Page/share.user') is-expanded

@endif">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-picture-o"></i><span class="app-menu__label"> Manage Gallery</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(request()->path() == 'admin/gallery/upload') active @endif" href="{{ route('upload')  }}"><i class="icon fa fa-plus"></i>Upload Album</a></li>
                {{-- <li><a class="treeview-item @if(request()->path() == 'admin/gallery/recent/upload' || request()->path() == 'admin/gallery/upload/search') active @endif" href="{{ route('recent.upload')  }}"><i class="icon fa fa-upload"></i> Recent Uploads </a></li> --}}
                {{-- <li><a class="treeview-item @if(request()->path() == 'admin/gallery/recent/album' || request()->path() == 'admin/gallery/album/search') active @endif" href="{{ route('recent.album')  }}"><i class="icon fa fa-picture-o"></i> Recent Albums </a></li> --}}
                <li><a class="treeview-item @if(request()->path() == 'admin/gallery/album' || request()->path() == 'admin/gallery/album/search' || request()->route()->getName() == 'gallery.album.items') active @endif" href="{{ route('gallery.album')  }}"><i class="icon fa fa-picture-o"></i>Albums</a></li>

                <li><a class="treeview-item @if(request()->path()=="admin/module/language/manager/album/Album%20Page/share.user")active @endif" href="{{route('module.language-manage',['album','Album Page','share.user'])}}"><i class="icon fa fa-language"></i>Translations </a></li>

{{--                <li><a class="treeview-item @if(request()->path() == 'admin/gallery/setting') active @endif" href="{{ route('gallery.setting')  }}"><i class="icon fa fa-cogs"></i>Setting</a></li>--}}
            </ul>
        </li>
        @endif

        @php $check_count = \App\SupportTicket::where('status', 1)->get() @endphp

        @if($adminid == 1 or in_array(14, $adminroles) == true)

{{--        <li><a class="app-menu__item @if(request()->path() == 'admin/supports' || request()->route()->getName() == 'ticket.admin.reply') active @endif" href="{{route('support.admin.index')}}"><i class="app-menu__icon fa fa-ambulance"></i><span class="app-menu__label">Support Tickets @if(count($check_count) == 0)  @else <span class="badge badge-danger"> {{count($check_count)}}</span> @endif</span></a></li>--}}


            <li class="treeview @if(request()->path()=='admin/supports') is-expanded

                            @elseif(request()->path()=="admin/module/language/manager/support_tickets/Support%20Tickets/support.index.customer") is-expanded
                            @endif">
                <a class="app-menu__item" href="{{route('support.admin.index')}}" data-toggle="treeview"><i class="app-menu__icon fa fa-buysellads"></i><span class="app-menu__label">Support @if(count($check_count) == 0)  @else <span class="badge badge-danger"> {{count($check_count)}}</span> @endif </span><i class="treeview-indicator fa fa-angle-right"></i></a>
                <ul class="treeview-menu">
                    <li><a class="treeview-item @if(request()->path()=='admin/supports') active @endif" href="{{route('support.admin.index')}}"><i class="icon fa fa-sitemap"></i>Tickets</a></li>

                    <li><a class="treeview-item @if(request()->path()=="admin/module/language/manager/support_tickets/Support%20Tickets/support.index.customer")active @endif" href="{{route('module.language-manage',['support_tickets','Support Tickets','support.index.customer'])}}"><i class="icon fa fa-language"></i>Support Tickets Translations </a></li>


                </ul>
            </li>


        @endif
        @if($adminid == 1 or in_array(15, $adminroles) == true)
        <li class="treeview @if(request()->routeIs('page*')) is-expanded @endif">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Pages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(request()->routeIs('page.index.settings')) active @endif" href="{{ route('page.index.settings')  }}"><i class="icon fa fa-file-text"></i>Home Page</a></li>
                <li><a class="treeview-item @if(request()->routeIs('page.alcoholics')) active @endif" href="{{ route('page.alcoholics')  }}"><i class="icon fa fa-file-text"></i>Alcoholics & Addiction</a></li>
                <li><a class="treeview-item @if(request()->routeIs('page.mental')) active @endif" href="{{ route('page.mental')  }}"><i class="icon fa fa-file-text"></i>Mental Trauma</a></li>
                <li><a class="treeview-item @if(request()->routeIs('page.spiritual')) active @endif" href="{{ route('page.spiritual')  }}"><i class="icon fa fa-file-text"></i>Spiritual Purification</a></li>
                <li><a class="treeview-item @if(request()->routeIs('page.influence')) active @endif" href="{{ route('page.influence')  }}"><i class="icon fa fa-file-text"></i>Influence of Work</a></li>
                <li><a class="treeview-item @if(request()->routeIs('page.purification')) active @endif" href="{{ route('page.purification')  }}"><i class="icon fa fa-file-text"></i>Purification Soul</a></li>
                <li><a class="treeview-item @if(request()->routeIs('page.about')) active @endif" href="{{ route('page.about')  }}"><i class="icon fa fa-file-text"></i>About</a></li>
            </ul>
        </li>
        @endif

        @if($adminid == 1 or in_array(16, $adminroles) == true)
        <li class="treeview @if(request()->path() == 'admin/team') is-expanded
                            @elseif(request()->path() == 'admin/testimonial') is-expanded
                            @elseif(request()->path() == 'admin/social') is-expanded
                            @elseif(request()->path() == 'admin/service') is-expanded
                            @elseif(request()->path() == 'admin/banner') is-expanded
                            @elseif(request()->path() == 'admin/static') is-expanded
                            {{-- @elseif(request()->path() == 'admin/about') is-expanded --}}
                            @elseif(request()->path() == 'admin/bread') is-expanded
                            @elseif(request()->path() == 'admin/how-it-work') is-expanded
                            @elseif(request()->path() == 'admin/footer') is-expanded
                            @elseif(request()->path() == 'admin/faqs') is-expanded
                            @elseif(request()->path() == 'admin/title/subtitle') is-expanded
                            @elseif(request()->path() == 'admin/faqs-create') is-expanded
                            @elseif(request()->path() == 'admin/new-users') is-expanded
                            @elseif(request()->path() == 'admin/background/image') is-expanded
                            @elseif(request()->path() == 'admin/slider') is-expanded
                            @elseif(request()->path() == 'admin/inslider') is-expanded
                            @elseif(request()->path() == 'admin/slider/new') is-expanded

                            @endif">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-globe"></i><span class="app-menu__label">Web Settings </span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/banner') active @endif" href="{{ route('banner.index')  }}"><i class="icon fa fa-image"></i>Manage Banner</a></li>--}}
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/bread') active @endif" href="{{ route('bread.index')  }}"><i class="icon fa fa-file-image-o"></i>Manage Breadcrumb</a></li>--}}
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/how-it-work') active @endif" href="{{ route('how-it-work.index')  }}"><i class="icon fa fa-question"></i>Manage How It's Work</a></li>--}}
                <li><a class="treeview-item @if(request()->path() == 'admin/slider' || request()->path() == 'admin/slider/new') active @endif" href="{{route('slider.index')}}"><i class="icon fa fa-image"></i>Slider</a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/inslider' || request()->path() == 'admin/inslider/new') active @endif" href="{{route('inslider.index')}}"><i class="icon fa fa-image"></i>Social Slider</a></li>

{{--                <li><a class="treeview-item @if(request()->path() == 'admin/static') active @endif" href="{{route('static.index')}}"><i class="icon fa fa-adjust"></i>Manage Statistics</a></li>--}}
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/service') active @endif" href="{{route('service.index')}}"><i class="icon fa fa-server"></i>Manage Service</a></li>--}}
                {{-- <li><a class="treeview-item @if(request()->path() == 'admin/about') active @endif" href="{{route('about.index')}}"><i class="icon fa fa-address-card"></i>Manage About</a></li> --}}
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/testimonial') active @endif" href="{{route('testimonial.index')}}"><i class="icon fa fa-comment-o"></i>Manage Testimonial</a></li>--}}
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/team') active @endif" href="{{ route('team.index')  }}"><i class="icon fa fa-users"></i>Manage Team</a></li>--}}
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/new-users') active @endif" href="{{ route('new.users')  }}"><i class="icon fa fa-users"></i>Manage New User</a></li>--}}
                <li><a class="treeview-item @if(request()->path() == 'admin/faqs') active  @elseif(request()->path() == 'admin/faqs-create') active @endif" href="{{route('faqs-all')}}"><i class="icon fa fa-question"></i>Manage Faq</a></li>
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/social') active @endif" href="{{route('social.index')}}"><i class="icon fa fa-facebook"></i>Manage Social</a></li>--}}
                <li><a class="treeview-item @if(request()->path() == 'admin/footer') active @endif" href="{{route('footer.index')}}"><i class="icon fa fa-first-order"></i>Manage Footer</a></li>
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/background/image') active @endif" href="{{route('background.image.index')}}"><i class="icon fa fa-image"></i>Background Images</a></li>--}}
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/title/subtitle') active @endif" href="{{route('extra.title.subtitle')}}"><i class="icon fa fa-text-height"></i>Extra Title & Sub-Title</a></li>--}}
            </ul>
        </li>
        @endif

{{--        @if($adminid == 1 or in_array(17, $adminroles) == true)--}}
{{--        <li class="treeview @if(request()->path() == 'admin/subscriber/list') is-expanded--}}
{{--                            @elseif(request()->path() == 'admin/subscriber/send/mail') is-expanded--}}
{{--                            @endif">--}}
{{--            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label"> Subscriber </span><i class="treeview-indicator fa fa-angle-right"></i></a>--}}
{{--            <ul class="treeview-menu">--}}
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/subscriber/list') active @endif" href="{{ route('subs.list')  }}"><i class="icon fa fa-calculator"></i> Subscribers List </a></li>--}}
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/subscriber/send/mail') active @endif" href="{{ route('subs.mail')  }}"><i class="icon fa fa-envelope"></i> Send Mail </a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        @endif--}}
        @if($adminid == 1 or in_array(18, $adminroles) == true)
        <li class="treeview @if(request()->path() == 'admin/general/settings') is-expanded
                            @elseif(request()->path() == 'admin/charges') is-expanded
                            @elseif(request()->path() == 'admin/affiliates') is-expanded
                            @elseif(request()->path() == 'admin/logo/icon') is-expanded
                            @elseif(request()->path() == 'admin/general/email') is-expanded
                            @elseif(request()->path() == 'admin/general/contact') is-expanded
                            @elseif(request()->path() == 'admin/general/sms') is-expanded
                            @elseif(request()->path() == 'admin/email/template') is-expanded
                            @elseif(request()->path() == 'admin/email/template/edit') is-expanded
{{--                            @elseif(request()->path() == 'admin/web/template') is-expanded--}}
                            @elseif(request()->path() == 'admin/seo') is-expanded
                            @elseif(request()->route()->getName() == 'email.language.edit') is-expanded
                            @elseif(request()->path() == 'admin/language/manager' || request()->route()->getName() == 'language-key') is-expanded
                            @endif">
            <a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cogs"></i><span class="app-menu__label">Settings </span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <ul class="treeview-menu">
                <li><a class="treeview-item @if(request()->path() == 'admin/general/settings') active @endif" href="{{route('general.index')}}"><i class="icon fa fa-cog"></i>General Settings </a></li>
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/web/template') active @endif" href="{{route('template.index')}}"><i class="icon fa fa-globe"></i>Web Template Settings </a></li>--}}
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/charges') active @endif" href="{{route('charge.index')}}"><i class="icon fa fa-money"></i>Charge Settings </a></li>--}}
                <li><a class="treeview-item @if(request()->path() == 'admin/logo/icon') active @endif" href="{{route('logo.index')}}"><i class="icon fa fa-image"></i>Logo & favicon </a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/general/email') active @endif" href="{{route('email.index')}}"><i class="icon fa fa-envelope"></i>Email Setting</a></li>
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/general/sms') active @endif" href="{{route('sms.index')}}"><i class="icon fa fa-phone-square"></i>Sms Setting</a></li>--}}
                <li><a class="treeview-item @if(request()->path() == 'admin/email/template' || request()->route()->getName() == 'email.language.edit') active @endif" href="{{route('email.language.index')}}"><i class="icon fa fa-envelope-o"></i>Email Language Manager</a></li>
                <li><a class="treeview-item @if(request()->path() == 'admin/seo') active @endif" href="{{route('seo')}}"><i class="icon fa fa-area-chart"></i>SEO Setting</a></li>
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/general/contact') active @endif" href="{{route('contact.index')}}"><i class="icon fa fa-connectdevelop"></i>Contact Setting</a></li>--}}
{{--                <li><a class="treeview-item @if(request()->path() == 'admin/language/manager' || request()->route()->getName() == 'language-key') active @endif" href="{{route('language-manage')}}"><i class="icon fa fa-language"></i>Language Manager </a></li>--}}
            </ul>
        </li>
        @endif

    </ul>
</aside>
