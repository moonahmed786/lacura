@extends('layouts.user_layout')

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
    <meta property="og:description"
          content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="100"/>
@stop

@section('titulo')
    <title>La Cura - 奇跡 {{  '| '.__($pt) }}</title>
@stop

@section('style')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/users/user-profile.css" rel="stylesheet" type="text/css"/>
    <!--  END CUSTOM STYLE FILE  -->
@stop
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">


                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing mt-sm-5">
                    <div class="widget-content widget-content-area br-6">
                        <h1 >@lang($pt)</h1>
                        <div class="col-md-2 float-right mb-3">
                            {{--                            <a href="{{route('add.new.ticket')}}" class="btn btn-warning btn-block" style="color: black ;"><b>@lang('New Ticket')</b></a>--}}
                        </div>


                        <div class="col-xl-12 col-lg-12 wow fadeInDown">


                            <form method="POST" action="{{ route('add-new-user-questionnaire') }}">
                                <div class="row  justify-content-center ">
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5  ">

                                        <div class="widget-content widget-content-area">


                                            <fieldset class="form-group">

                                                <div class="row">
                                                    <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">

                                                        @lang('schedules.If you have any illnesses')

                                                    </label>

                                                </div>
                                                <div class="row">

                                                    <div class="col-xl-6 col-lg-6 col-sm-6">
                                                        <div class="form-check ">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="Yes" value="Yes" name="illness"
                                                                       class="custom-control-input" {{ old('illness') == 'Yes' ? 'checked' : '' }} >
                                                                <label class="custom-control-label"
                                                                       for="Yes">@lang('schedules.Yes')</label>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-sm-6">

                                                        <div class="form-check ">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="illnessNo" value="No" name="illness"
                                                                       class="custom-control-input" {{ old('illness') == 'No'? 'checked' : '' }}>
                                                                <label class="custom-control-label"
                                                                       for="illnessNo">@lang('schedules.No')</label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @if ($errors->has('illness'))
                                                        <p style="color: red" class="ml-3"> {{ $errors->first('illness') }}</p>
                                                    @endif
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group ">

                                                <div class="row">
                                                    <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">

                                                        @lang('schedules.If you have [Yes')
                                                    </label>

                                                </div>
                                                <div class="row">

                                                    <div class="col-xl-6 col-lg-6 col-sm-12">
                                                        <div class="form-group ">
                                                            <label for="inputCity">@lang('schedules.disease name')
                                                            </label>
                                                            <input type="text" class="form-control" id="disease_name"
                                                                   name="disease_name" value="{{ old('disease_name')}}">
                                                        </div>
                                                        @if ($errors->has('disease_name'))
                                                            <p style="color: red" class="ml-3"> {{ $errors->first('disease_name') }}</p>
                                                        @endif
                                                    </div>

                                                    <div class="col-xl-6 col-lg-6 col-sm-12">


                                                        <div class="form-group ">
                                                            <label for="inputCity">@lang('schedules.when')

                                                            </label>
                                                            <input name="disease_date"
                                                                   class="form-control flatpickr flatpickr-input active"
                                                                   value="{{ old('disease_date', date('Y-m-d')) }}"
                                                                   type="date" placeholder="Select Date..">
                                                        </div>

                                                        @if ($errors->has('disease_date'))
                                                            <p style="color: red" class="ml-3"> {{ $errors->first('disease_date') }}</p>
                                                        @endif
                                                    </div>

                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group ">

                                                <div class="row">
                                                    <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">

                                                        @lang('schedules.What is the treatment')

                                                    </label>

                                                </div>
                                                <div class="row">

                                                    <div class="col-xl-6 col-lg-6 col-sm-6">
                                                        <div class="form-check ">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="treatment_status" name="treatment_status"
                                                                       value="Still under treatment"
                                                                       {{ old('treatment_status') == 'Still under treatment'? 'checked' : '' }}
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label" for="treatment_status">
                                                                    @lang('schedules.still under treatment')
                                                                </label>


                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-sm-6">

                                                        <div class="form-check ">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="treatment_status_off" name="treatment_status"
                                                                       value="Completely cured"
                                                                       {{ old('treatment_status') == 'Completely cured'? 'checked' : '' }}
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label" for="treatment_status_off">
                                                                    @lang('schedules.completely cured')
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @if ($errors->has('treatment_status'))
                                                        <p style="color: red" class="ml-3"> {{ $errors->first('treatment_status') }}</p>
                                                    @endif
                                                </div>
                                            </fieldset>
                                            <div class="row">

                                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                                    <div class="form-group ">
                                                        <label for="inputCity">
                                                            @lang('schedules.treatment_details')
                                                        </label>
                                                        <input type="text" class="form-control" id="treatment_details"
                                                               name="treatment_details" value="{{ old('treatment_details')}}">
                                                    </div>
                                                    @if ($errors->has('treatment_details'))
                                                        <p style="color: red" class="ml-3"> {{ $errors->first('treatment_details') }}</p>
                                                    @endif
                                                </div>

                                            </div>


                                            <fieldset class="form-group ">
                                                <div class="row">
                                                    <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">
                                                        @lang('schedules.have a chronic disease')


                                                    </label>

                                                </div>
                                                <div class="row">
                                                    <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">

                                                        @lang('schedules.write the name of the disease')

                                                    </label>

                                                </div>
                                                <div class="row">

                                                    <div class="col-xl-6 col-lg-6 col-sm-6">
                                                        <div class="form-check mb-2">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="chronic_disease_yes" name="chronic_disease"
                                                                       value="Yes" {{ old('chronic_disease') == 'Yes'? 'checked' : '' }}
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="chronic_disease_yes">@lang('schedules.Yes')
                                                                </label>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-sm-6">

                                                        <div class="form-check mb-2">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="chronic_disease_no" name="chronic_disease"
                                                                       value="No" {{ old('chronic_disease') == 'No'? 'checked' : '' }}
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="chronic_disease_no">@lang('schedules.No')

                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @if ($errors->has('chronic_disease'))
                                                        <p style="color: red" class="ml-3"> {{ $errors->first('chronic_disease') }}</p>
                                                    @endif
                                                </div>
                                            </fieldset>
                                            <div class="row">

                                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                                    <div class="form-group ">
                                                        <label for="inputCity">
                                                            @lang('schedules.chronic_disease_details')
                                                        </label>
                                                        <input type="text" class="form-control" id="inputCity"
                                                               name="chronic_disease_details" value="{{ old('chronic_disease_details')}}">
                                                    </div>
                                                    @if ($errors->has('chronic_disease_details'))
                                                        <p style="color: red"
                                                           class="ml-3"> {{ $errors->first('chronic_disease_details') }}</p>
                                                    @endif

                                                </div>

                                            </div>

                                            <fieldset class="form-group     ">
                                                <div class="row">
                                                    <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">
                                                        @lang('schedules.Ficaram sequelas')


                                                    </label>

                                                </div>
                                                <div class="row">
                                                    <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">

                                                        @lang('schedules.If Yes, please write the details')


                                                    </label>

                                                </div>
                                                <div class="row">

                                                    <div class="col-xl-6 col-lg-6 col-sm-6">
                                                        <div class="form-check mb-2">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="sequelae_yes" name="sequelae" value="Yes"
                                                                       {{ old('sequelae') == 'Yes'? 'checked' : '' }}
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="sequelae_yes">@lang('schedules.Yes')
                                                                </label>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-sm-6">

                                                        <div class="form-check mb-2">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="sequelae_no" name="sequelae" value="No"
                                                                       {{ old('sequelae') == 'No'? 'checked' : '' }}
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label" for="sequelae_no">@lang('schedules.No')

                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @if ($errors->has('sequelae'))
                                                        <p style="color: red" class="ml-3"> {{ $errors->first('sequelae') }}</p>
                                                    @endif
                                                </div>
                                            </fieldset>
                                            <div class="row">

                                                <div class="col-xl-12 col-lg-12 col-sm-12">
                                                    <div class="form-group ">
                                                        <label for="inputCity">@lang('schedules.Sequelae Details')
                                                        </label>
                                                        <input type="text" class="form-control" id="sequelae_details"
                                                               value="{{old('sequelae_details')}}"
                                                               name="sequelae_details">
                                                    </div>
                                                    @if ($errors->has('sequelae_details'))
                                                        <p style="color: red" class="ml-3"> {{ $errors->first('sequelae_details') }}</p>
                                                    @endif
                                                </div>

                                            </div>

                                            <fieldset class="form-group ">
                                                <div class="row">
                                                    <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">
                                                        @lang('schedules.Are there any illnesses currently')


                                                    </label>

                                                </div>
                                                <div class="row">
                                                    <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">

                                                        @lang('schedules.If Yes, please write the details')


                                                    </label>

                                                </div>
                                                <div class="row">

                                                    <div class="col-xl-6 col-lg-6 col-sm-6">
                                                        <div class="form-check">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="illness_treated_status"
                                                                       name="illness_treated_status" value="Yes"
                                                                       {{ old('illness_treated_status') == 'Yes'? 'checked' : '' }}
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="illness_treated_status">@lang('schedules.Yes')
                                                                </label>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-sm-6">

                                                        <div class="form-check ">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="illness_treated_status_no"
                                                                       name="illness_treated_status" value="No"
                                                                       {{ old('illness_treated_status') == 'No'? 'checked' : '' }}
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="illness_treated_status_no">@lang('schedules.No')

                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @if ($errors->has('illness_treated_status'))
                                                        <p style="color: red"
                                                           class="ml-3"> {{ $errors->first('illness_treated_status') }}</p>
                                                    @endif
                                                </div>
                                            </fieldset>
                                            <div class="row">

                                                <div class="col-xl-12 col-lg-12 col-sm-12">

                                                    <div class="form-group ">
                                                        <label for="inputCity">@lang('schedules.illness_treated_status_details')
                                                        </label>
                                                        <input type="text" class="form-control" id="illness_treated_status_details"
                                                               value="{{ old('illness_treated_status_details')  }}"
                                                               name="illness_treated_status_details">
                                                    </div>
                                                    @if ($errors->has('illness_treated_status_details'))
                                                        <p style="color: red"
                                                           class="ml-3"> {{ $errors->first('illness_treated_status_details') }}</p>
                                                    @endif
                                                </div>

                                            </div>

                                            <fieldset class="form-group mb-4">
                                                <div class="row">
                                                    <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">
                                                        @lang('schedules.Tem alguma deficiência física ou mental')


                                                    </label>

                                                </div>
                                                <div class="row">
                                                    <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">

                                                        @lang('schedules.If Yes, please write the details')


                                                    </label>

                                                </div>
                                                <div class="row">

                                                    <div class="col-xl-6 col-lg-6 col-sm-6">
                                                        <div class="form-check ">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="physical_disability"
                                                                       name="physical_disability" value="Yes"
                                                                       {{ old('physical_disability') == 'Yes'? 'checked' : '' }}

                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="physical_disability">@lang('schedules.Yes')
                                                                </label>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-sm-6">

                                                        <div class="form-check ">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="physical_disability_no"
                                                                       {{ old('physical_disability') == 'No'? 'checked' : '' }}
                                                                       name="physical_disability" value="No"
                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="physical_disability_no">@lang('schedules.No')

                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @if ($errors->has('physical_disability'))
                                                        <p style="color: red" class="ml-3"> {{ $errors->first('physical_disability') }}</p>
                                                    @endif
                                                </div>
                                            </fieldset>
                                            <div class="row">

                                                <div class="col-xl-12 col-lg-12 col-sm-12">

                                                    <div class="form-group ">
                                                        <label for="inputCity">@lang('schedules.physical_disability_details')
                                                        </label>
                                                        <input type="text" class="form-control" id="physical_disability_details"
                                                               value="{{old('physical_disability_details')}}"
                                                               name="physical_disability_details">
                                                    </div>
                                                    @if ($errors->has('physical_disability_details'))
                                                        <p style="color: red"
                                                           class="ml-3"> {{ $errors->first('physical_disability_details') }}</p>
                                                    @endif

                                                </div>

                                            </div>

                                            <fieldset class="form-group">
                                                <div class="row">
                                                    <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">
                                                        @lang('schedules.Você pode fazer serviços')


                                                    </label>

                                                </div>
                                                <div class="row">
                                                    <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">
                                                        @lang('schedules.If No, please write the reason')

                                                    </label>

                                                </div>
                                                <div class="row">

                                                    <div class="col-xl-6 col-lg-6 col-sm-6">
                                                        <div class="form-check mb-2">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="weight_bearing" name="weight_bearing" value="Yes"
                                                                       {{ old('weight_bearing') == 'Yes'? 'checked' : '' }}

                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="weight_bearing">@lang('schedules.Yes')
                                                                </label>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-sm-6">

                                                        <div class="form-check mb-2">
                                                            <div class="custom-control custom-radio classic-radio-info">
                                                                <input type="radio" id="weight_bearing_no" name="weight_bearing" value="No"
                                                                       {{ old('weight_bearing') == 'No'? 'checked' : '' }}

                                                                       class="custom-control-input">
                                                                <label class="custom-control-label"
                                                                       for="weight_bearing_no">@lang('schedules.No')

                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    @if ($errors->has('weight_bearing'))
                                                        <p style="color: red" class="ml-3"> {{ $errors->first('weight_bearing') }}</p>
                                                    @endif
                                                </div>
                                            </fieldset>
                                            <div class="row">

                                                <div class="col-xl-12 col-lg-12 col-sm-12">

                                                    <div class="form-group ">
                                                        <label for="inputCity">@lang('schedules.weight_bearing_details')
                                                        </label>
                                                        <input type="text" class="form-control" id="weight_bearing_details"
                                                               value="{{old("weight_bearing_details")}}"
                                                               name="weight_bearing_details">
                                                    </div>
                                                    @if ($errors->has('weight_bearing_details'))
                                                        <p style="color: red"
                                                           class="ml-3"> {{ $errors->first('weight_bearing_details') }}</p>
                                                    @endif

                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5  ">

                                        <div class="">
                                            <div class="widget-content widget-content-area">


                                                @csrf


                                                <fieldset class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">

                                                            @lang('schedules.Are you taking any medications')

                                                        </label>

                                                    </div>
                                                    <div class="row">
                                                        <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">

                                                            @lang('schedules.If Yes, please write the details')


                                                        </label>

                                                    </div>
                                                    <div class="row">

                                                        <div class="col-xl-6 col-lg-6 col-sm-6">
                                                            <div class="form-check mb-2">
                                                                <div class="custom-control custom-radio classic-radio-info">
                                                                    <input type="radio" id="drugs" name="drugs" value="Yes"
                                                                           {{ old('drugs') == 'Yes'? 'checked' : '' }}

                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label" for="drugs">@lang('schedules.Yes')
                                                                    </label>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-sm-6">

                                                            <div class="form-check mb-2">
                                                                <div class="custom-control custom-radio classic-radio-info">
                                                                    <input type="radio" id="drugs_no" name="drugs" value="No"
                                                                           {{ old('drugs') == 'No'? 'checked' : '' }}

                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label" for="drugs_no">@lang('schedules.No')

                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        @if ($errors->has('drugs'))
                                                            <p style="color: red" class="ml-3"> {{ $errors->first('drugs') }}</p>
                                                        @endif
                                                    </div>
                                                </fieldset>
                                                <div class="row">

                                                    <div class="col-xl-12 col-lg-12 col-sm-12">

                                                        <div class="form-group ">
                                                            <label for="inputCity">@lang('schedules.drugs_details')
                                                            </label>
                                                            <input type="text" class="form-control" id="drugs_details"
                                                                   value="{{old('drugs_details')}}"
                                                                   name="drugs_details">
                                                        </div>
                                                        @if ($errors->has('drugs_details'))
                                                            <p style="color: red" class="ml-3"> {{ $errors->first('drugs_details') }}</p>
                                                        @endif
                                                    </div>

                                                </div>

                                                <fieldset class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">
                                                            @lang('schedules.Have you ever been seriously injured')

                                                        </label>

                                                    </div>
                                                    <div class="row">
                                                        <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">

                                                            @lang('schedules.If Yes, please write the details')


                                                        </label>

                                                    </div>
                                                    <div class="row">

                                                        <div class="col-xl-6 col-lg-6 col-sm-6">
                                                            <div class="form-check mb-2">
                                                                <div class="custom-control custom-radio classic-radio-info">
                                                                    <input type="radio" id="serious_injured" name="serious_injured"
                                                                           value="Yes"
                                                                           {{ old('serious_injured') == 'Yes'? 'checked' : '' }}

                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                           for="serious_injured">@lang('schedules.Yes')
                                                                    </label>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-sm-6">

                                                            <div class="form-check mb-2">
                                                                <div class="custom-control custom-radio classic-radio-info">
                                                                    <input type="radio" id="serious_injured_no" name="serious_injured"
                                                                           value="No"
                                                                           {{ old('serious_injured') == 'No'? 'checked' : '' }}

                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                           for="serious_injured_no">@lang('schedules.No')

                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        @if ($errors->has('serious_injured'))
                                                            <p style="color: red" class="ml-3"> {{ $errors->first('serious_injured') }}</p>
                                                        @endif
                                                    </div>
                                                </fieldset>
                                                <div class="row">

                                                    <div class="col-xl-12 col-lg-12 col-sm-12">

                                                        <div class="form-group ">
                                                            <label for="inputCity">@lang('schedules.serious_injured_details')
                                                            </label>
                                                            <input type="text" class="form-control" id="serious_injured_details"
                                                                   value="{{old('serious_injured_details')}}"
                                                                   name="serious_injured_details">
                                                        </div>
                                                        @if ($errors->has('serious_injured_details'))
                                                            <p style="color: red"
                                                               class="ml-3"> {{ $errors->first('serious_injured_details') }}</p>
                                                        @endif
                                                    </div>

                                                </div>

                                                <fieldset class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">
                                                            @lang('schedules.Hearing or visual problems')


                                                        </label>

                                                    </div>
                                                    <div class="row">
                                                        <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">
                                                            @lang('schedules.If Yes, please write the details')


                                                        </label>

                                                    </div>
                                                    <div class="row">

                                                        <div class="col-xl-6 col-lg-6 col-sm-6">
                                                            <div class="form-check mb-2">
                                                                <div class="custom-control custom-radio classic-radio-info">
                                                                    <input type="radio" id="hearing_visual" name="hearing_visual"
                                                                           value="Yes"
                                                                           {{ old('hearing_visual') == "Yes"? 'checked' : '' }}

                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                           for="hearing_visual">@lang('schedules.Yes')
                                                                    </label>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-sm-6">

                                                            <div class="form-check mb-2">
                                                                <div class="custom-control custom-radio classic-radio-info">
                                                                    <input type="radio" id="hearing_visual_no" name="hearing_visual"
                                                                           value="No"
                                                                           {{ old('hearing_visual') == "No"? 'checked' : '' }}

                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                           for="hearing_visual_no">@lang('schedules.No')

                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        @if ($errors->has('hearing_visual'))
                                                            <p style="color: red" class="ml-3"> {{ $errors->first('hearing_visual') }}</p>
                                                        @endif
                                                    </div>
                                                </fieldset>
                                                <div class="row">

                                                    <div class="col-xl-12 col-lg-12 col-sm-12">

                                                        <div class="form-group ">
                                                            <label for="inputCity">@lang('schedules.hearing_visual_details')
                                                            </label>
                                                            <input type="text" class="form-control" id="hearing_visual_details"
                                                                   value="{{old('hearing_visual_details')}}"
                                                                   name="hearing_visual_details">
                                                        </div>
                                                        @if ($errors->has('hearing_visual_details'))
                                                            <p style="color: red"
                                                               class="ml-3"> {{ $errors->first('hearing_visual_details') }}</p>
                                                        @endif
                                                    </div>

                                                </div>

                                                <fieldset class="form-group mb-4">
                                                    <div class="row">
                                                        <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">
                                                            @lang('schedules.Are you allergic')


                                                        </label>

                                                    </div>
                                                    <div class="row">
                                                        <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">
                                                            @lang('schedules.If Yes, please write the details')


                                                        </label>

                                                    </div>
                                                    <div class="row">

                                                        <div class="col-xl-6 col-lg-6 col-sm-6">
                                                            <div class="form-check mb-2">
                                                                <div class="custom-control custom-radio classic-radio-info">
                                                                    <input type="radio" id="allergic" name="allergic" value="Yes"
                                                                           {{ old('allergic') == "Yes"? 'checked' : '' }}

                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                           for="allergic">@lang('schedules.Yes')
                                                                    </label>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-sm-6">

                                                            <div class="form-check mb-2">
                                                                <div class="custom-control custom-radio classic-radio-info">
                                                                    <input type="radio" id="allergic_no" name="allergic" value="No"
                                                                           {{ old('allergic') == "No"? 'checked' : '' }}

                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                           for="allergic_no">@lang('schedules.No')

                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        @if ($errors->has('allergic'))
                                                            <p style="color: red" class="ml-3"> {{ $errors->first('allergic') }}</p>
                                                        @endif
                                                    </div>
                                                </fieldset>
                                                <div class="row">

                                                    <div class="col-xl-12 col-lg-12 col-sm-12">

                                                        <div class="form-group ">
                                                            <label for="inputCity">@lang('schedules.allergic_details')
                                                            </label>
                                                            <input type="text" class="form-control" id="allergic_details"
                                                                   value="{{old('allergic_details')}}"
                                                                   name="allergic_details">
                                                        </div>
                                                        @if ($errors->has('allergic_details'))
                                                            <p style="color: red" class="ml-3"> {{ $errors->first('allergic_details') }}</p>
                                                        @endif

                                                    </div>

                                                </div>
                                                <fieldset class="form-group mb-4">

                                                    <div class="row">
                                                        <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">
                                                            @lang('schedules.blood type')


                                                        </label>

                                                    </div>
                                                    <div class="row">

                                                        <div class="col-xl-12 col-lg-12 col-sm-12">
                                                            <div class="">

                                                                <select class="form-control  basic" name="blood_type">
                                                                    <option selected="selected" value="B+">B+</option>
                                                                    <option value="B-" {{ old('blood_type') == 'B-' ? 'selected' : '' }}>
                                                                        B-
                                                                    </option>
                                                                    <option value="A+" {{ old('blood_type') == 'A+' ? 'selected' : '' }}>
                                                                        A+
                                                                    </option>
                                                                    <option value="AB-" {{ old('blood_type') == 'AB-' ? 'selected' : '' }}>
                                                                        AB-
                                                                    </option>
                                                                    <option value="AB+" {{ old('blood_type') == 'AB+' ? 'selected' : '' }}>
                                                                        AB+
                                                                    </option>
                                                                    <option value="A-" {{ old('blood_type') == 'A-' ? 'selected' : '' }}>
                                                                        A-
                                                                    </option>
                                                                    <option value="O+" {{ old('blood_type') == 'O+' ? 'selected' : '' }}>
                                                                        O+
                                                                    </option>
                                                                    <option value="O-" {{ old('blood_type') == 'O-' ? 'selected' : '' }}>
                                                                        O-
                                                                    </option>


                                                                </select>


                                                            </div>

                                                            @if ($errors->has('blood_type'))
                                                                <p style="color: red" class="ml-3"> {{ $errors->first('blood_type') }}</p>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </fieldset>
                                                <fieldset class="form-group ">
                                                    <div class="row">
                                                        <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">

                                                            @lang('schedules.Do you drink alcoholic beverages')


                                                        </label>

                                                    </div>
                                                    <div class="row">
                                                        <label class="col-form-label col-xl-12 col-sm-12 col-sm-12 pt-0">
                                                            @lang('schedules.If Yes, please write the details')


                                                        </label>

                                                    </div>
                                                    <div class="row">

                                                        <div class="col-xl-6 col-lg-6 col-sm-6">
                                                            <div class="form-check ">
                                                                <div class="custom-control custom-radio classic-radio-info">
                                                                    <input type="radio" id="Beverages_yes" name="alcohol" value="Yes"
                                                                           {{ old('alcohol') == "Yes"? 'checked' : '' }}

                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                           for="Beverages_yes">@lang('schedules.Yes')
                                                                    </label>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-sm-6">

                                                            <div class="form-check ">
                                                                <div class="custom-control custom-radio classic-radio-info">
                                                                    <input type="radio" id="Beverages_no" name="alcohol" value="No"
                                                                           {{ old('alcohol') == "No"? 'checked' : '' }}

                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                           for="Beverages_no">@lang('schedules.No')

                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        @if ($errors->has('alcohol'))
                                                            <p style="color: red" class="ml-3"> {{ $errors->first('alcohol') }}</p>
                                                        @endif
                                                    </div>
                                                </fieldset>
                                                {{--                            <div class="row">--}}

                                                {{--                                <div class="col-xl-12 col-lg-12 col-sm-12">--}}

                                                {{--                                    <div class="form-group ">--}}
                                                {{--                                        <label for="inputCity">@lang('schedules.alcohol_details')--}}
                                                {{--                                        </label>--}}
                                                {{--                                        <input type="text" class="form-control" id="alcohol_details" value="{{old('alcohol_details')}}"--}}
                                                {{--                                               name="alcohol_details">--}}
                                                {{--                                    </div>--}}
                                                {{--                                    @if ($errors->has('alcohol_details'))--}}
                                                {{--                                        <p style="color: red" class="ml-3"> {{ $errors->first('alcohol_details') }}</p>--}}
                                                {{--                                    @endif--}}
                                                {{--                                </div>--}}

                                                {{--                            </div>--}}


                                                <fieldset>

                                                    {{--                                <div class="row">--}}

                                                    {{--                                    <div class="col-xl-6 col-lg-6 col-sm-6">--}}
                                                    {{--                                                <label >@lang('schedules.Tipo de bebida')</label>--}}
                                                    {{--                                                <input type="text" class="form-control mt-4" id="Tipo" name="Tipo"  value="{{old('Tipo')}}">--}}
                                                    {{--                                        @if ($errors->has('Tipo'))--}}
                                                    {{--                                            <p style="color: red" class="ml-3"> {{ $errors->first('Tipo') }}</p>--}}
                                                    {{--                                        @endif--}}
                                                    {{--                                    </div>--}}
                                                    {{--                                    <div class="col-xl-6 col-lg-6 col-sm-6">--}}
                                                    {{--                                        <label >@lang('schedules.Copos por dia')</label>--}}
                                                    {{--                                        <input type="text" class="form-control" id="copos" name="copos" value="{{old('copos')}}" >--}}
                                                    {{--                                        @if ($errors->has('copos'))--}}
                                                    {{--                                            <p style="color: red" class="ml-3"> {{ $errors->first('copos') }}</p>--}}
                                                    {{--                                        @endif--}}
                                                    {{--                                    </div>--}}
                                                    {{--                                </div>--}}
                                                </fieldset>

                                                <fieldset class="form-group ">

                                                    <div class="row">

                                                        <div class="col-xl-12 col-lg-12 col-sm-12 ">
                                                            <div class="form-check ">
                                                                <div class="custom-control custom-radio classic-radio-info">
                                                                    <input type="radio" id="signature" name="signature"
                                                                           {{ old('signature') == "No"? 'checked' : '' }}
                                                                           class="custom-control-input">
                                                                    <label class="custom-control-label" for="signature">

                                                                        @lang('schedules.Declaro que os dados')


                                                                    </label>

                                                                </div>
                                                            </div>

                                                            @if ($errors->has('signature'))
                                                                <p style="color: red" class="ml-3"> {{ $errors->first('signature') }}</p>
                                                            @endif
                                                        </div>

                                                    </div>
                                                </fieldset>

                                                <div>

                                                    <input type="hidden" name="user_id" placeholder="Name"
                                                           value="{{ auth()->user()->id }}">
                                                    {{--                                                        <input type="hidden" name="name" required="" value="{{ auth()->user()->name }}">--}}

                                                    {{--                        <div class="form-group mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="blood_type">Your Blood Type</label>--}}
                                                    {{--                                <input type="text" class="form-control" name="blood_type" placeholder="Blood Type">--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="treatment_status">Your Treatment Status</label>--}}
                                                    {{--                                <select class="form-control" name="treatment_status">--}}
                                                    {{--                                    <option value="Still under treatment">Still under treatment</option>--}}
                                                    {{--                                    <option value="Completely cured">Completely cured</option>--}}
                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-group mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="disease_name">Do you have any disease? (Disease Name)</label>--}}
                                                    {{--                                <input type="text" class="form-control" name="disease_name" placeholder="Disease Name">--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="treatment_status">Disease Date</label>--}}
                                                    {{--                                <input type="datetime-local" name="disease_date"--}}
                                                    {{--                                       class="form-control flatpickr flatpickr-input active" type="text"--}}
                                                    {{--                                       placeholder="Select Date.." readonly="readonly">--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-row mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="illness">Illness</label>--}}
                                                    {{--                                <select class="form-control" name="illness">--}}
                                                    {{--                                    <option value="Yes">@lang('schedules.YES')</option>--}}
                                                    {{--                                    <option value="NO">@lang('schedules.No')</option>--}}
                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="illness_details">Illness Details</label>--}}
                                                    {{--                                <textarea name="illness_details" rows="3" cols="37" style="resize: none;"></textarea>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-row mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="chronic_disease">Chronic Disease</label>--}}
                                                    {{--                                <select class="form-control" name="chronic_disease">--}}
                                                    {{--                                    <option value="Yes">@lang('schedules.YES')</option>--}}
                                                    {{--                                    <option value="NO">@lang('schedules.No')</option>--}}
                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="chronic_disease_details">Chronic Disease Details</label>--}}
                                                    {{--                                <textarea name="chronic_disease_details" rows="3" cols="37"--}}
                                                    {{--                                          style="resize: none;"></textarea>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-row mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="surgery">Surgery</label>--}}
                                                    {{--                                <select class="form-control" name="surgery">--}}
                                                    {{--                                    <option value="Yes">@lang('schedules.YES')</option>--}}
                                                    {{--                                    <option value="NO">@lang('schedules.No')</option>--}}
                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="surgery_details">Surgery Details</label>--}}
                                                    {{--                                <textarea name="surgery_details" rows="3" cols="37" style="resize: none;"></textarea>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-row mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="sequelae">Sequelae</label>--}}
                                                    {{--                                <select class="form-control" name="sequelae">--}}
                                                    {{--                                    <option value="Yes">@lang('schedules.YES')</option>--}}
                                                    {{--                                    <option value="NO">@lang('schedules.No')</option>--}}
                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="sequelae_details">Sequelae Details</label>--}}
                                                    {{--                                <textarea name="sequelae_details" rows="3" cols="37" style="resize: none;"></textarea>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-row mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="illness_treated_status">Illness treated status</label>--}}
                                                    {{--                                <select class="form-control" name="illness_treated_status">--}}
                                                    {{--                                    <option value="Yes">@lang('schedules.YES')</option>--}}
                                                    {{--                                    <option value="NO">@lang('schedules.No')</option>--}}
                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="illness_treated_status_details">Illness treated status Details</label>--}}
                                                    {{--                                <textarea name="illness_treated_status_details" rows="3" cols="37"--}}
                                                    {{--                                          style="resize: none;"></textarea>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-row mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="physical_disability">Physical disability</label>--}}
                                                    {{--                                <select class="form-control" name="physical_disability">--}}
                                                    {{--                                    <option value="Yes">@lang('schedules.YES')</option>--}}
                                                    {{--                                    <option value="NO">@lang('schedules.No')</option>--}}
                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="physical_disability_details">Physical disability Details</label>--}}
                                                    {{--                                <textarea name="physical_disability_details" rows="3" cols="37"--}}
                                                    {{--                                          style="resize: none;"></textarea>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-row mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="weight_bearing">Weight bearing</label>--}}
                                                    {{--                                <select class="form-control" name="weight_bearing">--}}
                                                    {{--                                    <option value="Yes">@lang('schedules.YES')</option>--}}
                                                    {{--                                    <option value="NO">@lang('schedules.No')</option>--}}
                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="weight_bearing_details">Weight bearing Details</label>--}}
                                                    {{--                                <textarea name="weight_bearing_details" rows="3" cols="37"--}}
                                                    {{--                                          style="resize: none;"></textarea>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-row mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="drugs">Drugs</label>--}}
                                                    {{--                                <select class="form-control" name="drugs">--}}
                                                    {{--                                    <option value="Yes">@lang('schedules.YES')</option>--}}
                                                    {{--                                    <option value="NO">@lang('schedules.No')</option>--}}
                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="drugs_details">Drugs Details</label>--}}
                                                    {{--                                <textarea name="drugs_details" rows="3" cols="37" style="resize: none;"></textarea>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-row mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="serious_injured">Serious injured</label>--}}
                                                    {{--                                <select class="form-control" name="serious_injured">--}}
                                                    {{--                                    <option value="Yes">@lang('schedules.YES')</option>--}}
                                                    {{--                                    <option value="NO">@lang('schedules.No')</option>--}}
                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="serious_injured_details">Serious injured Details</label>--}}
                                                    {{--                                <textarea name="serious_injured_details" rows="3" cols="37"--}}
                                                    {{--                                          style="resize: none;"></textarea>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-row mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="hearing_visual">Hearing visual</label>--}}
                                                    {{--                                <select class="form-control" name="hearing_visual">--}}
                                                    {{--                                    <option value="Yes">@lang('schedules.YES')</option>--}}
                                                    {{--                                    <option value="NO">@lang('schedules.No')</option>--}}
                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="hearing_visual_details">Hearing Visual Details</label>--}}
                                                    {{--                                <textarea name="hearing_visual_details" rows="3" cols="37"--}}
                                                    {{--                                          style="resize: none;"></textarea>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-row mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="allergic">Allergic</label>--}}
                                                    {{--                                <select class="form-control" name="allergic">--}}
                                                    {{--                                    <option value="Yes">@lang('schedules.YES')</option>--}}
                                                    {{--                                    <option value="NO">@lang('schedules.No')</option>--}}
                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="allergic_details">Allergic Details</label>--}}
                                                    {{--                                <textarea name="allergic_details" rows="3" cols="37" style="resize: none;"></textarea>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-row mb-4">--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="alcohol">Alcohol</label>--}}
                                                    {{--                                <select class="form-control" name="alcohol">--}}
                                                    {{--                                    <option value="Yes">@lang('schedules.YES')</option>--}}
                                                    {{--                                    <option value="NO">@lang('schedules.No')</option>--}}
                                                    {{--                                </select>--}}
                                                    {{--                            </div>--}}
                                                    {{--                            <div class="form-group col-md-6">--}}
                                                    {{--                                <label for="alcohol_details">Alcohol</label>--}}
                                                    {{--                                <textarea name="alcogol_details" rows="3" cols="37" style="resize: none;"></textarea>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                    {{--                        <div class="form-group">--}}
                                                    {{--                            <div class="form-check pl-0">--}}
                                                    {{--                                <div class="custom-control custom-checkbox checkbox-info">--}}
                                                    {{--                                    <input type="checkbox" class="custom-control-input" name="signature">--}}
                                                    {{--                                    <label class="custom-control-label" for="gridCheck">Pledge that the information--}}
                                                    {{--                                        provided--}}
                                                    {{--                                        is correct?</label>--}}
                                                    {{--                                </div>--}}
                                                    {{--                            </div>--}}
                                                    {{--                        </div>--}}
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-3">@lang('schedules.Submit')</button>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>




@endsection

