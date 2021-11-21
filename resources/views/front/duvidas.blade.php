@extends('layouts.master')

@section('SEO')
<meta name="description" content="投資参加との治療プランの仕組み">
	<meta name="keywords" content="投資、プラン、治療、参加">
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
									<a href="/questions" class=" active ">
										<img src="{{url('/')}}/assets/images/1560174798.png">
										日本語
									</a>
								</div>
								<div class="lang">
									<a href="/pt-br/questions" class="">
										<img src="{{url('/')}}/assets/images/1560174834.png">
										Português
									</a>
								</div>
															
							</div>
						</div>

	@endif
                    
@stop

@section('facebook')	
	<meta property="og:title" content="La Cura - 奇跡 | について"/>
    <meta property="og:site_name" content="La Cura - 奇跡 | について"/>
    <meta property="og:description" content="投資参加との治療プランの仕組み" />
    <meta property="og:image" content="{{ asset("assets/images/logo/logo.png") }}"/>
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="100" />
@stop

@section('titulo')	
	<title>La Cura - 奇跡 | について</title>
@stop

@section('content')

    @if(activeTemp()  == 1)

			<!-- page title begin-->
			<div class="page-title">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-6">
							<h2>よくあるご質問</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- page title end -->

			<!-- slider begin-->
			<div id="donate" class="price">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-12 col-lg-12">
							<ul id="slider">
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- slider end -->

			<!-- treatments-2 begin -->
			<div id="treatments-2" class="about">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="row">
										<div class="col-xl-12 col-lg-12">
										<h5 class="mb-0">
												<p class="pranto-break">新規登録は、紹介によって登録できます。紹介がなければ直接登録してください。</p>
												<p class="pranto-break">抽選機能がついており、他のお客様が登録された際に、ランダムで割り振る機能が付いています。</p>
												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break">新規登録紹介方法</p>
												<p class="pranto-break">登録済みのお客様は参照リンクを送ることができます。</p>
												<p class="pranto-break">紹介リンクコードはダッシュボードにあります。<br />リンクをコピーペーストして紹介したい人に送信し登録を行う。<br />あなたのリンクから登録するとシステム内で計算されボーナス増えて、もらいます。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/01.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break">送信されたリンクをクリックし開きます。</p>
												<p class="pranto-break">漏れなく情報を記入してください。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/02.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>												
												<p class="pranto-break">利用規約に同意します。</p>
												<p class="pranto-break">「今すぐ送信」をクリックします。</p>
												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break">次のページで[送信]をクリックすると、2つのモジュールを表示されます[Please verify your Email *]と[Verify Code]</p>
												<p class="pranto-break">すべての手順を完了するまでこのページを閉じないでください。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/03.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break">左側のモジュールで、メールを正しく確認し、確認コード「Please verify your Email*」をクリックして送信します。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/04.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>												
												<p class="pranto-break">このポップアップを開き、[OK] をクリックします。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/05.png" style="width: 400px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">入力したメールアドレスに確認メールが届くので認証してください。</p>
												<p class="pranto-break">登録したメールアドレスに確認コード6桁の番号を確認し入力ください</p>
												<p class="pranto-break">*注意、、登録情報は非常に重要を無くさないでください。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/06.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">メールに送信されたコード6桁の番号を[認証]に入力して、次に、[認証] ボタンをクリックしてください。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/07.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/08.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">このポップアップを開き、[OK] をクリックすると登録が完了します。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/09.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">寄付銀行振込を行う方法は?</p>
												<p class="pranto-break">メールとパスワードでログインします。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/10.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>


												<p class="pranto-break">この次の手順が開きます[今すぐ入金する]をクリックします。</p>
												<p class="pranto-break">[銀行預金] モジュールを開き、[今すぐ入金] をクリックするとポップアップ開きます。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/121.png" style="width: 365px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">次に、入金額を追加し、「入金前の確認」をクリックします。</p>
												<p class="pranto-break">ポップアップに寄付金額を入力して [入金前の確認] をクリックします。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/131.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">プレビューを開き、[Pay Now] をクリックします。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/141.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">次に、銀行の情報が表示されます。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/151.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">Please Send Exactly XXX.XXX JPY、「ファイルを選択」ボタンをクリックして、預金明細書の写真を送信する必要があります。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/20.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">寄付の理由と、あなたの人生で抱きたい問題と改善点を説明し、最後に [送信] をクリックします。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/171.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">すべての手順を実行せずにこの画面を閉じると、全部やり直しになります。</p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">次に、アカウントに残高不足の場合は、[Recharge Now] をクリックします。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/15.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">お問い合わせ</p>												
												<p class="pranto-break">次に、[予約・診察] をクリックして日付を選択します。</p>												
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/11.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">日付、時間を選んで、会合地区の中から選択します。</p>
												<p class="pranto-break">同じ画面で、最寄りの地域で利用可能な時間を選択します。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/12.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">プランの「選択」をクリックします。<br/>寄付していることを同意し意識して進んでいきます。<br/>治療を選択し、銀行振替または、残高がある場合は、キャッシュバックからを選択します。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/211.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/212.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>													
												<p class="pranto-break">予約が完了すると登録したメールアドレスにお知らせメールが何度も届きます。</p>
												<p class="pranto-break">治療を受けたら、 投資を開始します。</p>
												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break">引き出す</p>
												<p class="pranto-break">今すぐ引き出すをクリックします。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/22.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>	
												<p class="pranto-break">引き出しの金額を入力します。<br />口座のキャッシュカードの写真と本人確認書類アップロード<br />スマホを手に持って運転免許証または在留カードをの自撮りの写真撮影し送信をクリックします。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/23.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break">※残高引き出しは注意してください。</p>
												<p class="pranto-break">その後はプランに応じて、終了日まで毎日、金利が発生します。<br />土曜日・日曜日・祝日は、営業をしておりません。</p>
												<p class="pranto-break">毎日の収益のリターンは、寄付の払い戻しとしてアカウントに追加されます<br />寄付の確認後の「3」人寄付をしたら、引き出しを行うことができます。<br />3人の紹介は、利用可能な残高の「1回」の引き出しを許可されます。<br />2回目のの引き出しはまた3人の参加投資必要があります。<br />180日の期間を完了また3人の紹介参加投資継続、残高の合計を引き出すことができます。<br />※　いずれかの条件達成しない場合は引き出しは許可されません。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/24.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break"> アフィリエイトは180日の期間を完了また7人の紹介参加継続、残高の合計を引き出すことができます。<br />※　いずれかの条件達成しない場合は引き出しは許可されません。</p>
												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break">プロファイルの管理画面</p>
												<p class="pranto-break">プロフィールに送信した画像は、フロントページ [フォロワー] の下に表示されます。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/26.png" style="width: 150px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break">サムネイルとしてランダムに表示されます。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/27.png" style="width: 500px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break">ここでは、あなたのコメントを投稿することができ、あなたのアドバイスや意見で他の人の心を開きます。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/28.png" style="width: 700px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break">お祓いは最低一度は行います、それとお客様の症状が改善するまでサポートします。</p>

												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break">サポートチケット</p>
												<p class="pranto-break">マニュアルの手順をご覧になっても解決しない場合は、各問い合わせ窓口までお問い合わせください。</p>
												<p class="pranto-break">サポートチケットからご質問することできます。</p>
												<p class="pranto-break">サポートチケット手順</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/30.png" style="width: 683px; margin: auto; display: block; align-content: center;" /></p>

												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break">共有(投稿)</p>
												<p class="pranto-break">このツールでは、簡単に紹介リンクを共有と投稿することできます。</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/31.png" style="width: 561px; margin: auto; display: block; align-content: center;" /></p>
												<p class="pranto-break">&nbsp;</p>
												<p class="pranto-break"><img src="{{url('/')}}/img/jp/32.png" style="width: 767px; margin: auto; display: block; align-content: center;" /></p>

											</h5>
										</div>
									</div>
								</div>
							</div>
							<br><br><br>
						</div>
					</div>
				</div>
			</div>
			<!-- treatments 2 end -->
		
	@endif
		
@stop
