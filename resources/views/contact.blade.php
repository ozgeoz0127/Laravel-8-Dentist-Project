@extends('layouts.default')
@section('content')

<div class="site-blocks-cover inner-page" style="background-image: url({{asset("images/contact_header.jpg")}});" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-7">
				<span class="sub-text">Temas Kurun</span>
				<h1>
					<strong>İletişim</strong></h1>
			</div>
		</div>
	</div>
</div>

<div class="site-block-half d-block d-lg-flex ">
	<div class="image order-2 bg-light">
		<h2 class="site-heading text-black mb-3">&nbsp;</h2>
		<form action="#" class="p-5 ">

			<div class="row form-group">
				<div class="col-md-12 mb-3 mb-md-0">
					<label class="font-weight-bold" for="fullname">İsim Soyisim</label>
					<input type="text" id="fullname" class="form-control" placeholder="İsim">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">
					<label class="font-weight-bold" for="email">Email</label>
					<input type="email" id="email" class="form-control" placeholder="Email">
				</div>
			</div>



			<div class="row form-group">
				<div class="col-md-12">
					<label class="font-weight-bold" for="message">Mesaj</label>
					<textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Mesajınız"></textarea>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-12">
					<input type="submit" value="Gönder" class="btn btn-primary">
				</div>
			</div>


		</form>
	</div>
	<div class="text order-1 text-right">
		<h2 class="site-heading text-black mb-3">İletişim
			<strong>Bilgileri</strong></h2>

		<a href="{{$settings["twitter"]}}" class="p-2 pl-0">
			<span class="icon-twitter"></span> / {{$settings["twitter"]}}
			</a>
		<a href="{{$settings["facebook"]}}" class="p-2 pl-0">
			<span class="icon-facebook"></span> / {{$settings["facebook"]}}
		</a>
		<a href="{{$settings["instagram"]}}" class="p-2 pl-0">
			<span class="icon-instagram"></span> / {{$settings["instagram"]}}
		</a>
		
		<p class="lead">{!! $settings["address"] !!}</p>
		<p >Telefon : {{$settings["phone"]}} - Fax : {{$settings["fax"]}}</p>
		<p >{{$settings["email"]}}</p>
	</div>
</div>


<div class="promo py-5 bg-primary">
	<div class="container text-center">
		<span class="d-block h4 mb-3 font-weight-light text-white"> Yeni yılda Diş temizleme ve Beyazlatma
			<strong class="font-weight-bold">%50</strong> indirim !</span>
		<div id="date-countdown" class="mt-0"></div>
	</div>
</div>

@stop