@extends('layouts.master')

@section('SEO')
<meta name="description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。">
	<meta name="keywords" content="精神的, トラウマ, 中毒, 病気, 魂の償い, 依存, 浄化, 開運, お祓い">
@stop

@section('lang')

	@if(request()->session()->get('lang') == 'en' )

		<meta http-equiv="refresh" content="0;{{url('/')}}/change-lang/ja/">

	@elseif(request()->session()->get('lang') == 'pt' )

	<meta http-equiv="refresh" content="0;{{url('/')}}/change-lang/ja/">

	@else

						<div class="col-xl-12">
							<div class="lang-wrapper">
								<div class="lang">
									<a href="/" class=" active ">
										<img src="{{url('/')}}/assets/images/1560174798.png">
										日本語
									</a>
								</div>
								<div class="lang">
									<a href="/pt-br/" class="">
										<img src="{{url('/')}}/assets/images/1560174834.png">
										Português
									</a>
								</div>
															
							</div>
						</div>

	@endif
                    
@stop

@section('facebook')	
	<meta property="og:title" content="La Cura - 奇跡 {{  '| '.__($pt) }}"/>
    <meta property="og:site_name" content="La Cura - 奇跡 {{  '| '.__($pt) }}"/>
    <meta property="og:description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="100" />
@stop

@section('titulo')	
	<title>La Cura - 奇跡 {{  '| '.__($pt) }}</title>
@stop

@section('style')

@stop
@section('content')
    @if(activeTemp()  == 1)
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <h2 class="extra-margin">{{__($pt)}}</h2>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.balance_show')

    <div class="contact register" id="app">
        <div class="container">


            @if (count($errors) > 0)
                <div class="row">
                    @foreach ($errors->all() as $error)
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p>{{ __($error) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="row">
                <div class="col-xl-6 col-lg-12" style="margin-bottom:20px ">

                    <form class="contact-form" method="POST" action="{{route('user.profile.update')}}" enctype="multipart/form-data">

                        @csrf
                        <div class="row">
                           
                            <div class="col-md-12 text-center">
                                <h2>@lang('Profile Update')</h2>
                                <br>
                            </div>
                         
                            <div class="col-xl-12 col-lg-12 ">
                                
                                <div class="form-group text-center">
                                    <img src="@if(Auth::user()->image) {{ asset('assets/images/user') .'/'. Auth::user()->image }} @else {{ asset('assets/images/user/no_user.png') }} @endif" style="width: 240px;">
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 ">
                                
                                <div class="form-group">
                                    <label for="InputFirstname">@lang('Full Name')<span class="requred">*</span></label>
                                    <input type="text"  id="InputFirstname" placeholder="@lang('Enter Name')" value="{{Auth::user()->name}}"  name="name" required>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 ">
                                
                                <div class="form-group">
                                    <label for="InputNickname">@lang('Nick Name')<span class="requred">*</span></label>
                                    <input type="text"  id="InputNickname" placeholder="@lang('Enter Nick Name')" value="{{Auth::user()->nickname}}"  name="nickname" required>
                                    <p class="text-info">@lang('This name will be publicly shown.')</p>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputMail">@lang('E-mail')<span class="requred">*</span></label>
                                    <input type="email"  id="InputMail" name="email" value="{{Auth::user()->email}}" placeholder="@lang('Enter Your E-mail')"
                                           required>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>@lang('Profile Image')<span class="requred">*</span></label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputUsername">@lang('Enter Mobile')<span class="requred">*</span></label>
                                    <input type="text"   name="mobile" value="{{Auth::user()->mobile}}" placeholder="@lang('Enter Mobile')"
                                           required>
                                </div>
                            </div>


                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputUsername">@lang('Country')<span class="requred">*</span></label>
                                    <input type="text" name="country" value="{{Auth::user()->country}}" placeholder="@lang('Enter Country Name')"
                                           required>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="userLanguage">@lang('Language')<span class="requred">*</span></label>
                                    <select id="userLanguage" name="lang">
                                        <option value="ja">@lang('Japanese')</option>
                                        <option value="pt-br">@lang('Portuguese')</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-xl-12 col-lg-12">
                                <div class="row d-flex">
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" style="width: 100%;" class="login-button btn-contact"> @lang('Update Profile')</button>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </form>

                </div>

                <div class="col-xl-6 col-lg-12" >




                    <form class="contact-form" id="changePAss" method="POST" action="{{route('change.password.user')}}" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="{{Auth::user()->id}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2>@lang('Change Password')</h2>
                                <br>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputFirstname">@lang('Old Password')<span class="requred">*</span></label>
                                    <input type="password"  id="InputFirstname" placeholder="@lang('Enter Your Old Password')"  name="passwordold" required>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputFirstname">@lang('New Password')<span class="requred">*</span></label>
                                    <input type="password"  id="InputFirstname" placeholder="@lang('Enter New Password')" name="password" required>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label for="InputMail">@lang('Confirm Password')<span class="requred">*</span></label>
                                    <input type="password"  id="InputMail" name="password_confirmation" placeholder="@lang('Confirm Password')" required>
                                </div>
                            </div>



                            <div class="col-xl-12 col-lg-12">
                                <div class="row d-flex">
                                    <div class="col-md-6 offset-md-3">
                                        @if(Auth::user()->tauth == 1)
                                            <button style="width: 100%" data-toggle="modal" data-target="#openmodal" type="button" class="login-button btn-contact"> @lang('Change Password')</button>
                                        @else
                                            <button style="width: 100%" type="submit" class="login-button btn-contact"> @lang('Change Password')</button>
                                        @endif
                                    </div>

                                </div>
                            </div>


                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div id="openmodal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">@lang('Google Authenticator Code Verify')</h4>
                    </div>
                    <form action="#" method="POST">
                        {{csrf_field()}}
                        <div class="modal-body">

                            <div class="form-group">
                                <input type="text"  v-model="codeData.code" name="code" placeholder="Enter Google Authenticator Code">
                                <small style="color: red; text-align: center" v-if="errors !== '' && codeData.code === '' ">@{{ errors }}</small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" @click.prevent="submitCode" class="btn btn-success">@lang('Verify')</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @elseif(activeTemp()  == 2)
        <section class="tools-section  pranto-tool">
            <div class="thm-container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="tools-content pranto-bread">
                            <h3>{{__($pt)}}</h3>

                        </div><!-- /.tools-content -->
                    </div><!-- /.col-md-6 -->

                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section>

        <section class="get-in-touch">

            <div class="thm-container">
                <div class="row">
                    <div class="col-md=12">
                        @if (count($errors) > 0)
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                                    {{__($error)}}
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="form-content">
                            <div class="inner">
                                <div class="title text-center">
                                    <h3>@lang('Profile Update')</h3>
                                </div><!-- /.title -->
                                <form action="{{route('user.profile.update')}}" enctype="multipart/form-data" method="post" class="contact-form">
                                    @csrf
                                    <div class="frm-grp">
                                        <input type="text" id="InputFirstname" placeholder="@lang('Enter Name')" value="{{Auth::user()->name}}"  name="name" required>
                                    </div><!-- /.frm-grp -->

                                    <div class="frm-grp">
                                        <input type="email" id="InputMail" name="email" value="{{Auth::user()->email}}" placeholder="@lang('Enter Your E-mail')" required>
                                    </div>

                                    <div class="frm-grp">
                                        <input type="text" name="mobile" value="{{Auth::user()->mobile}}" placeholder="@lang('Enter Mobile')"  required>
                                    </div>

                                    <div class="frm-grp">
                                        <input type="text" name="country" value="{{Auth::user()->country}}" placeholder="@lang('Enter Country Name')" required>
                                    </div>




                                    <div class="frm-grp">
                                        <button type="submit">@lang('Update Profile')</button>
                                    </div><!-- /.frm-grp -->


                                    <div class="form-result"></div><!-- /.form-result -->

                                </form>
                            </div><!-- /.inner -->
                        </div><!-- /.form-content -->
                    </div><!-- /.col-md-5 -->


                    <div class="col-md-6">
                        <div class="form-content">
                            <div class="inner">
                                <div class="title text-center">
                                    <h3>@lang('Change Password')</h3>

                                </div><!-- /.title -->
                                <form action="{{route('change.password.user')}}" method="post" class="contact-form">
                                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                    @csrf
                                    <div class="frm-grp">
                                        <input type="password"  id="InputFirstname" placeholder="@lang('Enter Your Old Password')"  name="passwordold" required>
                                    </div><!-- /.frm-grp -->
                                    <div class="frm-grp">
                                        <input type="password"  id="InputFirstname" placeholder="@lang('Enter New Password')" name="password" required>
                                    </div><!-- /.frm-grp -->
                                    <div class="frm-grp">
                                        <input type="password"  id="InputMail" name="password_confirmation" placeholder="@lang('Confirm Password')" required>
                                    </div><!-- /.frm-grp -->


                                        <div class="frm-grp">
                                            @if(Auth::user()->tauth == 1)
                                                <button style="width: 100%" data-toggle="modal" data-target="#openmodal" type="button" class="login-button btn-contact"> @lang('Change Password')</button>
                                            @else
                                                <button style="width: 100%" type="submit" class="login-button btn-contact"> @lang('Change Password')</button>
                                            @endif
                                        </div><!-- /.frm-grp -->


                                    <div class="form-result"></div><!-- /.form-result -->

                                </form>
                            </div><!-- /.inner -->
                        </div><!-- /.form-content -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.row -->
            </div><!-- /.thm-container -->
        </section>

        <div id="openmodal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">@lang('Google Authenticator Code Verify')</h4>
                    </div>
                    <form action="#" method="POST">
                        {{csrf_field()}}
                        <div class="modal-body">

                            <div class="form-group">
                                <input type="text"  v-model="codeData.code" name="code" placeholder="Enter Google Authenticator Code">
                                <small style="color: red; text-align: center" v-if="errors !== '' && codeData.code === '' ">@{{ errors }}</small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" @click.prevent="submitCode" class="btn btn-success">@lang('Verify')</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    @elseif(activeTemp()  == 3)
        <section class="page-content">
            <!--Start Page Heading-->
            <div class="page-heading page-heading-bg ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h1 class="title">{{__($pt)}}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Page Heading-->

            <!--Start Contact Area-->
            <div class="contact-wrap">
                <!--Start Container-->
                <div class="container">
                    @if (count($errors) > 0)
                        <div class="row">
                            <div class="col-md-12">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                                        {{__($error)}}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                @endif
                    <!--Start Row-->
                    <div class="row">
                        <div class="col-md-6 pranto-border" style="margin-bottom: 20px;">
                            <!--Start Contact Form-->
                            <div class="contact-form">

                                <div class="section-heading text-center">
                                    <h2 class="title">@lang('Profile Update')</h2>
                                </div>
                                <!--Start Section Heading-->

                            <!--End Section Heading-->
                                <form action="{{route('user.profile.update')}}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="row">


                                        <div class="col-xl-12 col-lg-12 ">
                                            <div class="form-group">
                                                <label for="InputFirstname">@lang('Full Name')<span class="requred">*</span></label>
                                                <input type="text" class="form-control" id="InputFirstname" placeholder="@lang('Enter Name')" value="{{Auth::user()->name}}"  name="name" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="InputMail">@lang('E-mail')<span class="requred">*</span></label>
                                                <input type="email" class="form-control" id="InputMail" name="email" value="{{Auth::user()->email}}" placeholder="@lang('Enter Your E-mail')"
                                                       required>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="InputUsername">@lang('Enter Mobile')<span class="requred">*</span></label>
                                                <input type="text" class="form-control"  name="mobile" value="{{Auth::user()->mobile}}" placeholder="@lang('Enter Mobile')"
                                                       required>
                                            </div>
                                        </div>


                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="InputUsername">@lang('Country Name')<span class="requred">*</span></label>
                                                <input type="text" class="form-control"  name="country" value="{{Auth::user()->country}}" placeholder="@lang('Enter Country Name')"
                                                       required>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="contact-frm-btn text-center">
                                        <button type="submit" class="cont-btn btn-block" style="width: 100%">@lang('Update Profile')</button>
                                    </div>

                                </form>
                            </div>
                            <!--End Contact Form-->
                        </div>


                        <div class="col-md-5 pranto-border">
                            <!--Start Contact Form-->
                            <div class="contact-form">

                                <div class="section-heading text-center">
                                    <h2 class="title">@lang('Change Password')</h2>
                                </div>
                                <!--Start Section Heading-->

                            <!--End Section Heading-->
                                <form id="changePAss"  action="{{route('change.password.user')}}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                    <div class="row">



                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="oldpass">@lang('Old Password')<span class="requred">*</span></label>
                                                <input type="password" class="form-control" id="oldpass" placeholder="@lang('Enter Your Old Password')"  name="passwordold" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="newPass">@lang('New Password')<span class="requred">*</span></label>
                                                <input type="password" class="form-control" id="newPass" placeholder="@lang('Enter New Password')" name="password" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="repas">@lang('Confirm Password')<span class="requred">*</span></label>
                                                <input type="password" class="form-control" id="repas" name="password_confirmation" placeholder="@lang('Confirm Password')" required>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="contact-frm-btn text-center">
                                        @if(Auth::user()->tauth == 1)
                                            <button style="width: 100%" data-toggle="modal" data-target="#openmodal" type="button" class="login-button btn-contact"> @lang('Change Password')</button>
                                        @else
                                            <button style="width: 100%" type="submit" class="login-button btn-contact"> @lang('Change Password')</button>
                                        @endif
                                    </div>

                                </form>
                            </div>
                            <!--End Contact Form-->
                        </div>
                    </div>
                    <!--End Row-->
                </div>
                <!--End Container-->
            </div>
            <!--End Contact Area-->
        </section>

        <div id="openmodal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">@lang('Google Authenticator Code Verify')</h4>
                    </div>
                    <form action="#" method="POST">
                        {{csrf_field()}}
                        <div class="modal-body">

                            <div class="form-group">
                                <input type="text" class="form-control"  v-model="codeData.code" name="code" placeholder="Enter Google Authenticator Code">
                                <small style="color: red; text-align: center" v-if="errors !== '' && codeData.code === '' ">@{{ errors }}</small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" @click.prevent="submitCode" class="btn btn-success">@lang('Verify')</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    @elseif(activeTemp()  == 4)
        <div class="hyip-breadcrump" style="background-image: url({{asset('assets/images/bred.jpg')}}); background-size: cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 text-center">
                        <div class="breadcrump-title text-center">
                            <h2 class="add-space text-center">{{__($pt)}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="login">
            <div class="container">
                <div class="row">
                    @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <div class="col-md-12">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        &times;
                                    </button>
                                    <p>{{ __($error) }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif


                    <div class="col-xl-6" style="margin-bottom:20px ">
                        <div class="part-form">
                            <h3 class="login-title">@lang('Profile Update')</h3>

                            <form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="text"  id="InputFirstname" placeholder="@lang('Enter Name')" value="{{Auth::user()->name}}"  name="name" required>
                                <input type="email"  id="InputMail" name="email" value="{{Auth::user()->email}}" placeholder="@lang('Enter Your E-mail')" required>
                                <input type="text"   name="mobile" value="{{Auth::user()->mobile}}" placeholder="@lang('Enter Mobile')" required>
                                <input type="text"   name="country" value="{{Auth::user()->country}}" placeholder="@lang('Enter Country Name')" required>
                                <button type="submit">@lang('Update Profile')</button>
                            </form>
                        </div>
                    </div>


                    <div class="col-xl-6">
                        <div class="part-form">
                            <h3 class="login-title">@lang('Change Password')</h3>

                            <form action="{{route('change.password.user')}}" method="post">
                                <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                @csrf
                                <input type="password"  id="InputFirstname" placeholder="@lang('Enter Your Old Password')"  name="passwordold" required>
                                <input type="password"  id="InputFirstname" placeholder="@lang('Enter New Password')" name="password" required>
                                <input type="password"  id="InputMail" name="password_confirmation" placeholder="@lang('Confirm Password')" required>

                                @if(Auth::user()->tauth == 1)
                                    <button  data-toggle="modal" data-target="#openmodal" type="button" class="login-button btn-contact"> @lang('Change Password')</button>
                                @else
                                    <button type="submit" class="login-button btn-contact"> @lang('Change Password')</button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="openmodal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">@lang('Google Authenticator Code Verify')</h4>
                        </div>
                        <form action="#" method="POST">
                            {{csrf_field()}}
                            <div class="modal-body">

                                <div class="form-group">
                                    <input type="text"  v-model="codeData.code" name="code" placeholder="Enter Google Authenticator Code">
                                    <small style="color: red; text-align: center" v-if="errors !== '' && codeData.code === '' ">@{{ errors }}</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" @click.prevent="submitCode" class="btn btn-success">@lang('Verify')</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">@lang('Close')</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


    @endif

@endsection
@section('script')
    <script>
        var app = new Vue({
            el: '#app',
            data:{
                codeData:{
                    code: ''
                },
                errors: ''
            },
            methods:{
                submitCode(){
                    var input = this.codeData;
                    axios.post('{{route('check_two_facetor')}}',input).then(function (e) {

                        if (e.data.success == true){
                            $("#changePAss").submit();
                            console.log("ok")
                        }else {
                            swal(e.data.message,"", "warning");
                        }

                    }).catch(function (error) {
                        app.errors = error.response.data.errors.code;
                    })
                }
            },
            mounted() {
                $('#userLanguage').val("{{ Auth::user()->lang }}");
            }


        });
    </script>
@stop
