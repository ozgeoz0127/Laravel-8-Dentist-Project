@extends('layouts.default')

@section('title')
	{{$settings["subpage"]->title}}
@stop
@section('keywords')
	{{$settings["subpage"]->keywords}}
@stop
@section('description')
	{{$settings["subpage"]->description}}
@stop



@section('content')
<div class="site-blocks-cover aos-init aos-animate inner-page" style="height:200px;min-height:150px;background-image: url({{asset("images/hero_bg_2.jpg")}});" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 col-xs-12 pagestitle">
				<h1>
					<strong>{{ $settings["subpage"]->title }}</strong></h1>
			</div>
		</div>
	</div>
</div>

<div class="site-section section-about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 pr-md-12 text-left mb-5">
				<div>
					{!! $settings["subpage"]->detail !!}
				</div>
			</div>
		</div>
	</div>
</div>

<div class="site-block-half d-block d-lg-flex ">
	<div class="image order-2 " style="background: #fffcf1;">
		@livewire("review",["id" => $settings["subpage"]->id])	
	</div>
	<div class="text order-1 text-right bg-light">
		<h2 class=" text-black mb-3">Yorumlarınız</h2>

		@foreach ($settings["review"] as $r)
			<div class="col-md-12 col-xs-12" style="border-bottom:1px solid #ccc">
				<div class="col-md-12 col-xs-12">
				<div clasS="col-md-12 col-xs-6">{{$r->user->name." ".$r->user->surname}}
					<div class="starrating ">
						<input type="radio" id="star5" @if($r->rate == 5) checked @endif name="rating{{$r->id}}" value="5" />
						<label for="" title="5 star"></label>
						<input type="radio" id="star4" @if($r->rate == 4) checked @endif  name="rating{{$r->id}}" value="4" />
						<label for="" title="4 star"></label>
						<input type="radio" id="star3" @if($r->rate == 3) checked @endif name="rating{{$r->id}}" value="3" />
						<label for="" title="3 star"></label>
						<input type="radio" id="star2" @if ($r->rate == 2) checked @endif name="rating{{$r->id}}" value="2" />
						<label for="" title="2 star"></label>
						<input type="radio" id="star1" @if ($r->rate == 1) checked @endif name="rating{{$r->id}}" value="1" />
						<label for="" title="1 star"></label>
					</div>
				
				</div>
				</div>
				<div class="col-md-12 col-xs-12">{{$r->subject}}</div>
				<div class="col-md-12 col-xs-12">{{$r->review}}</div>
			</div>
		@endforeach
	</div>
</div>

@stop
