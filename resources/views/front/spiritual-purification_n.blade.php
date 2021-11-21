@extends('layouts.index')

@section('SEO')
    <meta name="description" content="{!!(session('lang') == 'pt-br')? $page->descriptions_pt : $page->description!!}">
    <meta name="keywords" content="{!!(session('lang') == 'pt-br')? $page->keywords_pt : $page->keywords!!}">
@stop

@section('lang')

{{--	@if(request()->session()->get('lang') == 'en' )--}}

{{--		<meta http-equiv="refresh" content="0;{{url('/')}}/change-lang/ja/">--}}

{{--	@elseif(request()->session()->get('lang') == 'pt' )--}}

{{--	<meta http-equiv="refresh" content="0;{{url('/')}}/change-lang/ja/">--}}

{{--	@else--}}


{{--	@endif--}}

@stop

@section('facebook')
    <meta property="og:title"
          content="La Cura - 奇跡 | {!!(session('lang') == 'pt-br')? $page->title_pt : $page->title!!}"/>
    <meta property="og:site_name" content="La Cura - 奇跡 {{  '| '.__($pt) }}"/>
    <meta property="og:description"
          content="{!!(session('lang') == 'pt-br')? $page->descriptions_pt : $page->description!!}"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="300"/>
    <meta property="og:image:height" content="100"/>
@stop
@section('titulo')
    <title>La Cura - 奇跡 {!!(session('lang') == 'pt-br')? $page->title_pt : $page->title!!}</title>
    <meta name="title" Content="{!!(session('lang') == 'pt-br')? $page->title_pt : $page->title!!}">
@stop

@section('content')
    @if(activeTemp()  == 1)
        <!--Breadcrumb start-->
        <div class="ast_pagetitle">
            <div class="ast_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="page_title">
                            <h2>@lang('spiritual.Spiritual Purification')</h2>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <ul class="breadcrumb">
                            <li><a href="/">@lang('spiritual.Home')</a></li>
                            <li>//</li>
                            <li>@lang('spiritual.Spiritual Purification')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('front.partials.slider_n')
{{--		@include('front.partials.slider')--}}

		<!-- treatments 3 begin -->
		<div id=""  class="about">
			<div class="container">
				<div class="row">

					@if(session('lang') == 'pt-br')
						{!! $page->pt !!}
					@else
						{!! $page->ja !!}
					@endif

				</div>
			</div>
		</div>
		<br><br>
		<!-- treatments 3 end -->

    @endif

@stop

@section('script')
	<script>
		function save_reply_comment(e){

			var form_data = $(e).serialize();

			$.ajax({
				url:"/save-comments",
				method:"POST",
				data:form_data,
				success:function(data){
					if(data.error != ''){
						var errormsg = JSON.parse(data);
						$('#comment_form')[0].reset();
						$('#comment_message').html(errormsg.error);
						$('#comment_id').val('0');
						load_comment_reply();
					}
				}
			})
			return false;
		 }
		 function load_comment_reply(){
			$.ajax({
				url:"/comments/treatments-3",
				method:"GET",
				success:function(data)
				{
					console.log(data);
					$('#display_comment').html(data);
				}
			})
		}
		$(document).ready(function(){

			$('#comment_form').on('submit', function(event){
				event.preventDefault();
				var form_data = $(this).serialize();
				$.ajax({
					url:"/save-comments",
					method:"POST",
					data:form_data,
					success:function(data){
						if(data.error != ''){
							var errormsg = JSON.parse(data);
							$('#comment_form')[0].reset();
							$('#comment_message').html(errormsg.error);
							$('#comment_id').val('0');
							load_comment();
						}
					}
				})
				return false;
			});

		 load_comment();

		function load_comment()
		{
			$.ajax({
				url:"/comments/treatments-3",
				method:"GET",
				success:function(data)
				{
					console.log(data);
					$('#display_comment').html(data);
				}
			})
		}

		$(document).on('click', '.reply', function(){
			var comment_id = $(this).attr("id");
			var formhtml = '<form onsubmit="save_reply_comment(this); return false;" id="comment_form"><input type="hidden" name="_token" value="{{ csrf_token() }}"><input type="hidden" name="users_id" value="18"><input type="hidden" name="page_id" value="treatments-3"><input type="hidden" name=""><div class="form-group"><textarea name="comment" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea></div><div class="form-group"><input type="hidden" name="reply_id" id="comment_id" value="'+comment_id+'" /><input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /></div></form>';
			$(this).siblings('.reply-box').html(formhtml);

			// $('#comment_id').val(comment_id);
			// $('#comment_name').focus();
		});

		});
	</script>
	<script>
		var app = new Vue({
		   el: '#app',
			data:{
			  newdata:{
				  subscribe_email: ''
			  }
			},
			methods:{
				subsribe(){
					var input = this.newdata;
					axios.post('{{route('subscriber.store')}}', input).then(function (res) {
						if (res.data.success == true){
							swal(res.data.message,"", "success");
							app.newdata.subscribe_email = '';
						}else {
							swal(res.data.message,"", "warning");
						}
					});
				}
			}
		});
	</script>
@stop
