@extends('layouts.master')

@section('SEO')
<meta name="description" content="精神的な浄化、身体、心と思考、精神、紛争、魂、過去の人生の紛争とパラレルエネルギーの連動糸 “エクトプラズム”">
	<meta name="keywords" content="霊的な浄化、身体、心と思考、精神、紛争、魂、紛争、過去の生活、パラレルワールドの連動糸、エクトプラズム">
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
									<a href="/spiritual-purification" class=" active ">
										<img src="{{url('/')}}/assets/images/1560174798.png">
										日本語
									</a>
								</div>
								<div class="lang">
									<a href="/pt-br/spiritual-purification" class="">
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
    <meta property="og:description" content="精神的な浄化、身体、心と思考、精神、紛争、魂、過去の人生の紛争とパラレルエネルギーの連動糸 “エクトプラズム”"/>
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="100" />
@stop

@section('titulo')
	<title>La Cura - 奇跡 {{  '| '.__($pt) }}</title>
@stop

@section('content')
    @if(activeTemp()  == 1)

		<!-- page title begin-->
		<div class="page-title">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-6">
						<h2>@lang('asimjap')</h2>
					</div>
				</div>
			</div>
		</div>
		<!-- page title end -->

{{--		@include('front.partials.slider')--}}

		<!-- treatments 3 begin -->
		<div id="treatments-3"  class="about">
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
