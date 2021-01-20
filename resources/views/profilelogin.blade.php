@extends('layouts.default')
@section('content')
<div class="site-blocks-cover aos-init aos-animate inner-page" style="height:200px;min-height:150px;background-image: url({{asset("images/hero_bg_2.jpg")}});" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 col-xs-12 pagestitle" >
				<h1 >
					<strong>Giriş Yapınız</strong></h1>
			</div>
		</div>
	</div>
</div>


<div class="site-section section-about">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-xs-3"></div>
			<div class="col-md-6 col-xs-6 text-left ">
				<form method="post" action='{{Route("login")}}' id="loginform">
					@csrf
					<p>
					<label>Email Adresi</label>
					<input type="text" class="form-control" name="email" placeholder="Email"></p>
					<p>
						<label>Şifre</label>
					<input type="password" class="form-control" name="password" placeholder="Şifre"></p>
					<div class="row">
						<div class="col-md-3">
							<input type="submit" class="btn btn-danger" value="Giriş Yap">
						</div>
						<div class="col-md-9 text-right loadlogin" style="line-height:36px"></div>
					</div>
				</form>
			</div>
			<div class="col-md-3 col-xs-3"></div>

		</div>
	</div>
</div>


@stop