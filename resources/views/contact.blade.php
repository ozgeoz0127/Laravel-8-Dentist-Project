@extends('layouts.default')
@section('content')

    <div class="site-blocks-cover aos-init aos-animate inner-page" style="height:200px;min-height:150px;background-image: url({{asset("images/hero_bg_2.jpg")}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 col-xs-12 pagestitle">
                    <h1>
                        <strong> iletişim</strong></h1>
                </div>
            </div>
        </div>
    </div>

<div class="site-block-half d-block d-lg-flex ">
	<div class="image order-2 bg-light">
		<h2 class="site-heading text-black mb-3">&nbsp;</h2>

		<form action="{{route("contact_sendmessage")}}" method="POST" class="p-5 ">
			@include('includes.message')
			@csrf
			<div class="row form-group">
				<div class="col-md-12 mb-3 mb-md-0">
					<label class="font-weight-bold" for="fullname">İsim Soyisim</label>
					<input type="text" id="fullname" name="name" class="form-control" placeholder="İsim">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">
					<label class="font-weight-bold" for="email">Email</label>
					<input type="email" id="email" name="email" class="form-control" placeholder="Email">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">
					<label class="font-weight-bold" for="email">Telefon</label>
					<input type="text" id="phone" name="phone" class="form-control" placeholder="Telefon">
				</div>
			</div>
			<div class="row form-group">
				<div class="col-md-12">
					<label class="font-weight-bold" for="email">Konu</label>
					<input type="text" id="subject" name="subject" class="form-control" placeholder="Konu">
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



		<p class="lead">{!! $settings["address"] !!}</p>
		<p >Telefon : {{$settings["phone"]}} - Fax : {{$settings["fax"]}}</p>
		<p >{{$settings["email"]}}</p>
	</div>
</div>


</div>

@stop
