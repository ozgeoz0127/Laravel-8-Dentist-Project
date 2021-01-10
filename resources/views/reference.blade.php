@extends('layouts.default')

@section('title')
	Referanslar
@stop
@section('keywords')
	{{$settings["keywords"]}}
@stop
@section('description')
	{{$settings["description"]}}
@stop



@section('content')
<div class="site-blocks-cover aos-init aos-animate inner-page" style="height:200px;min-height:150px;background-image: url({{asset("images/hero_bg_2.jpg")}});" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 col-xs-12 pagestitle">
				<h1>
					<strong>Referanslar </strong></h1>
			</div>
		</div>
	</div>
</div>

<div class="site-section section-about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 pr-md-12 text-left mb-5">
				<div>
					{!! $settings["references"] !!}
				</div>
			</div>
		</div>
	</div>
</div>

@stop
