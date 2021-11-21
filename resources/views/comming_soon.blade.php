@extends('layouts.user_layout')

@section('SEO')
<meta name="description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。">
	<meta name="keywords" content="精神的, トラウマ, 中毒, 病気, 魂の償い, 依存, 浄化, 開運, お祓い">
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
    <link href="assets/css/pages/coming-soon/style.css" rel="stylesheet" type="text/css" />
@stop
@section('content')
    <div class="coming-soon-container">
        <div class="coming-soon-cont">
            <div class="coming-soon-wrap">
                <div class="coming-soon-container">
                    <div class="coming-soon-content">

                        <h4 class="">Coming Soon</h4>
                        <p class="">We will be here in a shortwhile.....</p>

                        <div id="timer">
                            <div class="days"><span class="count">3</span> <span class="text">Days</span></div>
                            <div class="hours"><span class="count">4</span> <span class="text">Hours</span></div>
                            <div class="min"><span class="count">15</span> <span class="text">Mins</span></div>
                            <div class="sec"><span class="count">--</span> <span class="text">Secs</span></div>
                        </div>

                        <h3>Subscribe to get notified!</h3>

                        <form class="text-left">
                            <div class="coming-soon">

                                <div class="">
                                    <div id="email-field" class="field-wrapper input">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                        <input id="email" name="email" class="form-control" type="text" value="" placeholder="Email">
                                        <button type="submit" class="btn btn-success" value="">Subscribe</button>
                                    </div>
                                </div>

                            </div>
                        </form>

                        <ul class="social list-inline">
                            <li class="list-inline-item"><a class="" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a></li>
                            <li class="list-inline-item"><a class="" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a></li>
                            <li class="list-inline-item"><a class="" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a></li>
                            <li class="list-inline-item"><a class="" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></a></li>
                        </ul>

                        <p class="terms-conditions">© 2020 All Rights Reserved. <a href="#">Lacura</a> is a Project to save the World. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="coming-soon-image">
            <div class="l-image">
                <div class="img-content">
                    <img src="assets/img/mindset.svg" alt="coming_soon">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>


        (function() {

            'use strict';

            // click events
            document.body.addEventListener('click', copy, true);

            // event handler
            function copy(e) {


                // find target element
                var
                    t = e.target,
                    c = t.dataset.copytarget,
                    inp = (c ? document.querySelector(c) : null);

                // is element selectable?
                if (inp && inp.select) {

                    // select text
                    inp.select();

                    try {
                        // copy text
                        document.execCommand('copy');
                        inp.blur();

                        // copied animation
                        t.classList.add('copied');
                        setTimeout(function() { t.classList.remove('copied'); }, 1500);
                    }
                    catch (err) {
                        alert('please press Ctrl/Cmd+C to copy');
                    }

                }

            }

        })();

    </script>

@stop
