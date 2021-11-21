@extends('layouts.master')

@section('SEO')
<meta name="description" content="心理的なトラウマは、心や感情の中で起こり、不可逆的な損傷を引き起こす可能性があります。">
	<meta name="keywords" content="心理的なトラウマ、心、感情、不可逆的、精神的、感情的な損傷、身体、ストレス、うつ病、パニック">
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
									<a href="/mental-trauma" class=" active ">
										<img src="{{url('/')}}/assets/images/1560174798.png">
										日本語
									</a>
								</div>
								<div class="lang">
									<a href="/pt-br/mental-trauma" class="">
										<img src="{{url('/')}}/assets/images/1560174834.png">
										Português
									</a>
								</div>

							</div>
						</div>

	@endif

@stop

@section('facebook')
	<meta property="og:title" content="La Cura - 奇跡 | 精神的なトラウマ"/>
    <meta property="og:site_name" content="La Cura - 奇跡 | 精神的なトラウマ"/>
    <meta property="og:description" content="心理的なトラウマは、心や感情の中で起こり、不可逆的な損傷を引き起こす可能性があります。"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="100" />
@stop

@section('titulo')
	<title>La Cura - 奇跡 | 精神的なトラウマ</title>
@stop

@section('content')
    @if(activeTemp()  == 1)

		<!-- page title begin-->
		<div class="page-title">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-6">
						<h2>@lang('Psychological trauma')</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- page title end -->

		@include('front.partials.slider')

		<!-- treatments-2 begin -->
		<div id="treatments-2" class="about">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-xl-12 col-lg-12 col-md-12">
						@if(session('lang') == 'pt-br')
							{!! $page->pt !!}
						@else
							{!! $page->ja !!}
						@endif


					</div>

				</div>
			</div>
		</div>
		<br><br>
		<!-- treatments 2 end -->

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
				url:"/comments/treatments-2",
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
				url:"/comments/treatments-2",
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
			var formhtml = '<form onsubmit="save_reply_comment(this); return false;" id="comment_form"><input type="hidden" name="_token" value="{{ csrf_token() }}"><input type="hidden" name="users_id" value="{{Auth::user() ? Auth::user()->id : ''}}"><input type="hidden" name="page_id" value="treatments-2"><input type="hidden" name=""><div class="form-group"><textarea name="comment" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea></div><div class="form-group"><input type="hidden" name="reply_id" id="comment_id" value="'+comment_id+'" /><input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /></div></form>';
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
