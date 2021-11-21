@extends('layouts.user_layout')

@section('SEO')
    <meta name="description" content="怒りや、苦しみ、恨み、妬みなど全てを忘れ、ただ消し去ることです。それは価値ある物でもなく、審判することもありません、許しなのです。望みとおりの夢を創る事です。">
    <meta name="keywords" content="精神的, トラウマ, 中毒, 病気, 魂の償い, 依存, 浄化, 開運, お祓い">
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
@section('header')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset("assets/css/forms/theme-checkbox-radio.css")}}">
    <link href="{{asset("assets/plugins/lightbox/photoswipe.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/plugins/lightbox/default-skin/default-skin.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/plugins/lightbox/custom-photswipe.css")}}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
@endsection
@section('style')
    <style>
        body {
            margin: 0
        }

        .container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .container img {
            width: 100%;
            display: block;
            -webkit-filter: grayscale(1);
            filter: grayscale(1);
            transition: all 100ms ease-out;
        }

        .container img:hover {
            transform: scale(1.04);
            -webkit-filter: grayscale(0);
            filter: grayscale(0);
        }


    </style>
    {{--    <style>--}}
    {{--        .price {--}}
    {{--            padding: 0 0 120px;--}}
    {{--            background: #fff;--}}
    {{--        }--}}
    {{--        body {--}}
    {{--            background-color: #eee;--}}
    {{--        }--}}
    {{--        .hello {--}}
    {{--            opacity: 1 !important;--}}
    {{--        }--}}
    {{--        .full {--}}
    {{--            position: fixed;--}}
    {{--            left: 0;--}}
    {{--            top: 0;--}}
    {{--            width: 100%;--}}
    {{--            height: 100%;--}}
    {{--            z-index: 1;--}}
    {{--        }--}}
    {{--        .full .content {--}}
    {{--            background-color: rgba(0,0,0,0.75) !important;--}}
    {{--            height: 100%;--}}
    {{--            width: 100%;--}}
    {{--            display: grid;--}}
    {{--        }--}}
    {{--        .full .content img {--}}
    {{--            left: 50%;--}}
    {{--            transform: translate3d(0, 0, 0);--}}
    {{--            animation: zoomin 1s ease;--}}
    {{--            max-width: 100%;--}}
    {{--            max-height: 100%;--}}
    {{--            margin: auto;--}}
    {{--        }--}}
    {{--        .byebye {--}}
    {{--            opacity: 0;--}}
    {{--        }--}}
    {{--        .byebye:hover {--}}
    {{--            transform: scale(0.2) !important;--}}
    {{--        }--}}
    {{--        .gallery {--}}
    {{--            display: grid;--}}
    {{--            grid-column-gap: 8px;--}}
    {{--            grid-row-gap: 8px;--}}
    {{--            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));--}}
    {{--            grid-auto-rows: 8px;--}}
    {{--        }--}}
    {{--        .gallery img {--}}
    {{--            max-width: 100%;--}}
    {{--            border-radius: 8px;--}}
    {{--            box-shadow: 0 0 16px #333;--}}
    {{--            transition: all 1.5s ease;--}}
    {{--        }--}}
    {{--        .gallery img:hover {--}}
    {{--            box-shadow: 0 0 32px #333;--}}
    {{--        }--}}
    {{--        .gallery .content {--}}
    {{--            padding: 4px;--}}
    {{--        }--}}
    {{--        .gallery .gallery-item {--}}
    {{--            transition: grid-row-start 300ms linear;--}}
    {{--            transition: transform 300ms ease;--}}
    {{--            transition: all 0.5s ease;--}}
    {{--            cursor: pointer;--}}
    {{--        }--}}
    {{--        .gallery .gallery-item:hover {--}}
    {{--            transform: scale(1.025);--}}
    {{--        }--}}
    {{--        @media (max-width: 600px) {--}}
    {{--            .gallery {--}}
    {{--                grid-template-columns: repeat(auto-fill, minmax(30%, 1fr));--}}
    {{--            }--}}
    {{--        }--}}
    {{--        @media (max-width: 400px) {--}}
    {{--            .gallery {--}}
    {{--                grid-template-columns: repeat(auto-fill, minmax(50%, 1fr));--}}
    {{--            }--}}
    {{--        }--}}
    {{--        @-moz-keyframes zoomin {--}}
    {{--            0% {--}}
    {{--                max-width: 50%;--}}
    {{--                transform: rotate(-30deg);--}}
    {{--                filter: blur(4px);--}}
    {{--            }--}}
    {{--            30% {--}}
    {{--                filter: blur(4px);--}}
    {{--                transform: rotate(-80deg);--}}
    {{--            }--}}
    {{--            70% {--}}
    {{--                max-width: 50%;--}}
    {{--                transform: rotate(45deg);--}}
    {{--            }--}}
    {{--            100% {--}}
    {{--                max-width: 100%;--}}
    {{--                transform: rotate(0deg);--}}
    {{--            }--}}
    {{--        }--}}
    {{--        @-webkit-keyframes zoomin {--}}
    {{--            0% {--}}
    {{--                max-width: 50%;--}}
    {{--                transform: rotate(-30deg);--}}
    {{--                filter: blur(4px);--}}
    {{--            }--}}
    {{--            30% {--}}
    {{--                filter: blur(4px);--}}
    {{--                transform: rotate(-80deg);--}}
    {{--            }--}}
    {{--            70% {--}}
    {{--                max-width: 50%;--}}
    {{--                transform: rotate(45deg);--}}
    {{--            }--}}
    {{--            100% {--}}
    {{--                max-width: 100%;--}}
    {{--                transform: rotate(0deg);--}}
    {{--            }--}}
    {{--        }--}}
    {{--        @-o-keyframes zoomin {--}}
    {{--            0% {--}}
    {{--                max-width: 50%;--}}
    {{--                transform: rotate(-30deg);--}}
    {{--                filter: blur(4px);--}}
    {{--            }--}}
    {{--            30% {--}}
    {{--                filter: blur(4px);--}}
    {{--                transform: rotate(-80deg);--}}
    {{--            }--}}
    {{--            70% {--}}
    {{--                max-width: 50%;--}}
    {{--                transform: rotate(45deg);--}}
    {{--            }--}}
    {{--            100% {--}}
    {{--                max-width: 100%;--}}
    {{--                transform: rotate(0deg);--}}
    {{--            }--}}
    {{--        }--}}
    {{--        @keyframes zoomin {--}}
    {{--            0% {--}}
    {{--                max-width: 50%;--}}
    {{--                transform: rotate(-30deg);--}}
    {{--                filter: blur(4px);--}}
    {{--            }--}}
    {{--            30% {--}}
    {{--                filter: blur(4px);--}}
    {{--                transform: rotate(-80deg);--}}
    {{--            }--}}
    {{--            70% {--}}
    {{--                max-width: 50%;--}}
    {{--                transform: rotate(45deg);--}}
    {{--            }--}}
    {{--            100% {--}}
    {{--                max-width: 100%;--}}
    {{--                transform: rotate(0deg);--}}
    {{--            }--}}
    {{--        }--}}
    {{--       --}}
    {{--        .container {--}}
    {{--            display: grid;--}}
    {{--            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));--}}
    {{--            gap: 20px;--}}
    {{--            background: teal;--}}
    {{--            padding: 15px;--}}
    {{--        }--}}
    {{--        .container img {--}}
    {{--            width: 100%;--}}
    {{--            display: block;--}}
    {{--            -webkit-filter: grayscale(1);--}}
    {{--            filter: grayscale(1);--}}
    {{--            transition: all 100ms ease-out;--}}
    {{--        }--}}
    {{--        .container img:hover {--}}
    {{--            transform: scale(1.04);--}}
    {{--            -webkit-filter: grayscale(0);--}}
    {{--            filter: grayscale(0);--}}
    {{--        }--}}



    {{--        /* Footer */--}}





    {{--    </style>--}}

@stop
@section('content')


    <div id="content" class="main-content">

        @foreach($albums as $album)
            <div class="row mt-2 layout-px-spacing" id="cancel-row">
                <div class="col-lg-12 layout-spacing ">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>{{$album->title}}</h4>
                                </div>
                            </div>
                        </div>

                    <div class="widget-content widget-content-area">

                        <div id="demo-test-gallery" class="demo-gallery" data-pswp-uid="1">

                                @foreach($album->items as $item)
                                    <a class="img-1"
                                       href="{{ asset('assets/storage/album/'. $item->filename) }}"
                                       data-size="463.725x535.062" data-med="assets/img/lightbox-1.jpg"
                                       data-med-size="1110x335" data-author="Samuel Rohl">
                                        <img src="{{ asset('assets/storage/album/'. $item->filename) }}"
                                             alt="image-gallery">
                                        {{--                                            <figure>This is dummy caption. It has been placed here solely to demonstrate--}}
                                        {{--                                                the look and feel of finished, typeset text.--}}
                                        {{--                                            </figure>--}}
                                    </a>

                                @endforeach

                        </div>

                        <style>
                            .pswp__button--like {
                                background: inherit !important;
                            }
                        </style>
                        <!-- Root element of PhotoSwipe. Must have class pswp. -->
                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                            <!-- Background of PhotoSwipe. It's a separate element, as animating opacity is faster than rgba(). -->
                            <div class="pswp__bg"></div>

                            <!-- Slides wrapper with overflow:hidden. -->
                            <div class="pswp__scroll-wrap">
                                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                                <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                                <div class="pswp__container">
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                    <div class="pswp__item"></div>
                                </div>

                                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                                <div class="pswp__ui pswp__ui--hidden">

                                    <div class="pswp__top-bar">

                                        <!--  Controls are self-explanatory. Order can be changed. -->
                                        <div class="pswp__counter"></div>
                                        <button class="pswp__button pswp__button--close"
                                                title="Close (Esc)"></button>
                                        {{--                                        <button class="pswp__button pswp__button--share" title="Share"></button>--}}
                                        <button class="pswp__button pswp__button--fs"
                                                title="Toggle fullscreen"></button>
                                        <button class="pswp__button pswp__button--zoom"
                                                title="Zoom in/out"></button>
                                        <button class="pswp__button pswp__button--like" title="Like" onclick="shareit()">
                                            Like
                                        </button>

                                        <!-- element will get class pswp__preloader--active when preloader is running -->
                                        <div class="pswp__preloader">
                                            <div class="pswp__preloader__icn">
                                                <div class="pswp__preloader__cut">
                                                    <div class="pswp__preloader__donut"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                        <div class="pswp__share-tooltip"></div>
                                    </div>
                                    <button class="pswp__button pswp__button--arrow--left"
                                            title="Previous (arrow left)">
                                    </button>
                                    <button class="pswp__button pswp__button--arrow--right"
                                            title="Next (arrow right)">
                                    </button>
                                    <div class="pswp__caption">
                                        <div class="pswp__caption__center"></div>
                                    </div>

                                </div>
                            </div>
                        </div>





                    </div>

                </div>
            </div>
            </div>




        @endforeach


















        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="http://lacura.me/">Lacura</a>, All
                    rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="feather feather-heart">
                        <path
                            d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                    </svg>
                </p>
            </div>
        </div>
    </div>







    {{--    <div class="gallery" id="gallery">--}}

    {{--        @foreach($albums as $album)--}}

    {{--            @foreach($album->items as $item)--}}
    {{--                <div class="gallery-item">--}}
    {{--                    <div class="content">--}}
    {{--                     --}}
    {{--                </div>--}}
    {{--            @endforeach--}}
    {{--        @endforeach--}}


    {{--    </div>--}}




    {{--                <h5 class="d-inline-block">{{ $album->title }}</h5>--}}
    {{--                <p class="d-inline-block text-muted">--}}
    {{--                    - {{ \Carbon\Carbon::parse($album->created_at)->format('M d, Y') }}</p>--}}

    {{--                    </div>--}}




@endsection


{{--@push('light-gallery')--}}
{{--    <script src="{{ asset('assets/front/js/lightgallery.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/front/js/lg-fullscreen.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/front/js/lg-thumbnail.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/front/js/lg-video.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/front/js/lg-autoplay.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/front/js/lg-zoom.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/front/js/jquery.mousewheel.min.js') }}"></script>--}}
{{--@endpush--}}
@push('style-lib')
    <link rel="stylesheet" href="{{ asset('assets/front/css/lightgallery.min.css') }}">

@endpush
@section('script')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('assets/plugins/lightbox/photoswipe.min.js')}}"></script>
    <script src="{{asset('assets/plugins/lightbox/photoswipe-ui-default.min.js')}}"></script>
    <script src="{{asset('assets/plugins/lightbox/custom-photswipe.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <script type="text/javascript">
        var gallery = document.querySelector('#gallery');
        var getVal = function (elem, style) {
            return parseInt(window.getComputedStyle(elem).getPropertyValue(style));
        };
        var getHeight = function (item) {
            return item.querySelector('.content').getBoundingClientRect().height;
        };
        var resizeAll = function () {
            var altura = getVal(gallery, 'grid-auto-rows');
            var gap = getVal(gallery, 'grid-row-gap');
            gallery.querySelectorAll('.gallery-item').forEach(function (item) {
                var el = item;
                el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
            });
        };
        gallery.querySelectorAll('img').forEach(function (item) {
            item.classList.add('byebye');
            if (item.complete) {
                console.log(item.src);
            } else {
                item.addEventListener('load', function () {
                    var altura = getVal(gallery, 'grid-auto-rows');
                    var gap = getVal(gallery, 'grid-row-gap');
                    var gitem = item.parentElement.parentElement;
                    gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
                    item.classList.remove('byebye');
                });
            }
        });
        window.addEventListener('resize', resizeAll);
        gallery.querySelectorAll('.gallery-item').forEach(function (item) {
            item.addEventListener('click', function () {
                item.classList.toggle('full');
            });
        });

    </script>
    {{--    <script>--}}

    {{--        var app = new Vue({--}}
    {{--            el: '#app',--}}
    {{--            data: {--}}
    {{--                codeData: {--}}
    {{--                    code: ''--}}
    {{--                },--}}
    {{--                errors: ''--}}
    {{--            },--}}
    {{--            methods: {--}}
    {{--                submitCode() {--}}
    {{--                    var input = this.codeData;--}}
    {{--                    axios.post('{{route('check_two_facetor')}}', input).then(function (e) {--}}

    {{--                        if (e.data.success == true) {--}}
    {{--                            $("#changePAss").submit();--}}
    {{--                            console.log("ok")--}}
    {{--                        } else {--}}
    {{--                            swal(e.data.message, "", "warning");--}}
    {{--                        }--}}

    {{--                    }).catch(function (error) {--}}
    {{--                        app.errors = error.response.data.errors.code;--}}
    {{--                    })--}}
    {{--                }--}}
    {{--            },--}}
    {{--            mounted() {--}}
    {{--                var path = "{{ asset('assets/storage/album') .'/' }}";--}}

    {{--                $('.imageGallery').lightGallery({--}}
    {{--                    thumbnail: true,--}}
    {{--                });--}}

    {{--                // Edit Album--}}
    {{--                // $('.editAlbumBtn').on('click', function() {--}}
    {{--                //     var modal = $('#editAlbumModal');--}}
    {{--                //     var title = $(this).data('title');--}}
    {{--                //     var items = $(this).data('items');--}}
    {{--                //     var id = $(this).data('id');--}}
    {{--                //     var comment = $(this).data('comment');--}}

    {{--                //     modal.find('.album_title').text(title);--}}
    {{--                //     modal.find('input[name=album_id]').val(id);--}}
    {{--                //     modal.find('input[name=title]').val(title);--}}
    {{--                //     modal.find('textarea[name=comment]').val(comment);--}}

    {{--                //     var temp = '';--}}
    {{--                //     $.each(items, function(key, value) {--}}
    {{--                //         temp += '<div class="album-item album-item-remove col-md-3">';--}}
    {{--                //         temp += `<a class="removeAlbumItemBtn" data-item="${path}${value.filename}" data-filetype="${value.filetype}" data-id="${value.id}" data-title="${title}">`;--}}
    {{--                //         if(value.filetype == 2) {--}}
    {{--                //             temp += `<video src="${path}${value.filename}"></video>`;--}}
    {{--                //         }else{--}}
    {{--                //             temp += `<img src="${path}${value.filename}">`;--}}
    {{--                //         }--}}
    {{--                //         temp += '</a>';--}}
    {{--                //         temp += '</div>';--}}
    {{--                //     });--}}

    {{--                //     modal.find('.album').html(temp);--}}

    {{--                //     modal.modal('show');--}}

    {{--                //     $('#updateAlbumBtn').on('click', function() {--}}
    {{--                //         modal.find('form').submit();--}}
    {{--                //     });--}}

    {{--                // });--}}

    {{--                // Remove Album Item--}}
    {{--                // $('#editAlbumModal').on('click', '.removeAlbumItemBtn', function() {--}}
    {{--                //     var modal = $('#removeAlbumItemModal');--}}
    {{--                //     var title = $(this).data('title');--}}
    {{--                //     var item = $(this).data('item');--}}
    {{--                //     var id = $(this).data('id');--}}
    {{--                //     var filetype = $(this).data('filetype');--}}

    {{--                //     modal.find('.album_title').text(title);--}}
    {{--                //     modal.find('input[name=album_item_id]').val(id);--}}

    {{--                //     if(filetype == 2) {--}}
    {{--                //         temp = `<video src="${item}"></video>`;--}}
    {{--                //     }else{--}}
    {{--                //         temp = `<img src="${item}">`;--}}
    {{--                //     }--}}

    {{--                //     modal.find('.item').html(temp);--}}

    {{--                //     modal.modal('show');--}}
    {{--                // });--}}

    {{--                // Remove Album--}}
    {{--                // $('.removeAlbumBtn').on('click', function() {--}}
    {{--                //     var modal = $('#removeAlbumModal');--}}
    {{--                //     var title = $(this).data('title');--}}
    {{--                //     var id = $(this).data('id');--}}

    {{--                //     modal.find('.album_title').text(title);--}}
    {{--                //     modal.find('input[name=album_id]').val(id);--}}
    {{--                //     modal.modal('show');--}}

    {{--                // });--}}

    {{--                // Remove Upload--}}
    {{--                // $('.removeUploadBtn').on('click', function() {--}}
    {{--                //     var modal = $('#removeUploadModal');--}}
    {{--                //     var filename = $(this).data('filename');--}}
    {{--                //     var filetype = $(this).data('filetype');--}}
    {{--                //     var id = $(this).data('id');--}}

    {{--                //     modal.find('input[name=album_item_id]').val(id);--}}

    {{--                //     if(filetype == 2) {--}}
    {{--                //         temp = `<video src="${path}${filename}"></video>`;--}}
    {{--                //     }else{--}}
    {{--                //         temp = `<img src="${path}${filename}">`;--}}
    {{--                //     }--}}

    {{--                //     modal.find('.item').html(temp);--}}

    {{--                //     modal.modal('show');--}}
    {{--                // });--}}

    {{--                // Update Upload--}}
    {{--                // $('.editUploadBtn').on('click', function() {--}}
    {{--                //     var modal = $('#editUploadModal');--}}
    {{--                //     var comment = $(this).data('comment');--}}
    {{--                //     var filename = $(this).data('filename');--}}
    {{--                //     var filetype = $(this).data('filetype');--}}
    {{--                //     var id = $(this).data('id');--}}

    {{--                //     modal.find('input[name=album_item_id]').val(id);--}}
    {{--                //     modal.find('textarea[name=comment]').val(comment);--}}

    {{--                //     if(filetype == 2) {--}}
    {{--                //         temp = `<video src="${path}${filename}"></video>`;--}}
    {{--                //     }else{--}}
    {{--                //         temp = `<img src="${path}${filename}">`;--}}
    {{--                //     }--}}

    {{--                //     modal.find('.item').html(temp);--}}

    {{--                //     $('#updateUploadBtn').on('click', function() {--}}
    {{--                //         modal.find('form').submit();--}}
    {{--                //     });--}}

    {{--                //     modal.modal('show');--}}
    {{--                // });--}}

    {{--                var success = "{{ session()->has('success') ? session()->get('success') : '' }}";--}}
    {{--                var success_text = "{{ session()->has('success') ? session()->get('success_text') : '' }}";--}}
    {{--                var errors = [];--}}

    {{--                if (success.length) {--}}
    {{--                    swal({--}}
    {{--                        title: success,--}}
    {{--                        text: success_text,--}}
    {{--                        icon: 'success',--}}
    {{--                        button: 'Close',--}}
    {{--                    });--}}
    {{--                }--}}

    {{--                @if ( isset($errors) )--}}
    {{--                    errors = @php echo json_encode($errors->all()) @endphp;--}}
    {{--                @endif--}}

    {{--                if (errors.length) {--}}
    {{--                    list = document.createElement('ul');--}}

    {{--                    $.each(errors, function (idx, err) {--}}
    {{--                        listItem = document.createElement('li');--}}
    {{--                        listItem.innerHTML = err;--}}
    {{--                        list.append(listItem);--}}
    {{--                    });--}}
    {{--                    swal({--}}
    {{--                        content: list,--}}
    {{--                        button: 'Close',--}}
    {{--                        icon: 'error',--}}
    {{--                    });--}}
    {{--                }--}}


    {{--            }--}}


    {{--        });--}}
    {{--    </script>--}}
@stop
