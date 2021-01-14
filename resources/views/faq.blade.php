@extends('layouts.default')
@section('title')
	Sık Sorulan Sorular
@stop
@section('keyword')
	keyword
@stop
@section('description')
	description
@stop
@section('content')
<div class="site-blocks-cover aos-init aos-animate inner-page" style="height:200px;min-height:150px;background-image: url({{asset("images/hero_bg_2.jpg")}});" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 col-xs-12 pagestitle">
				<h1>
					<strong>Sık Sorulan Sorular</strong></h1>
			</div>
		</div>
	</div>
</div>

<div class="site-section section-about">
	<div class="container">
		<div class="row">
			<div id="accordion">
				@foreach ($settings["faq"] as $k=>$v)
				<div class="card" style="border:none">
					<div class="card-header" style="background-color:inherit" id="heading{{$k}}">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$k}}" aria-expanded="true" aria-controls="collapse{{$k}}">								{{$v->question}}
							</button>
						</h5>
					</div>

					<div id="collapse{{$k}}" class="collapse @if ($k == 0) show @endif" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							{!! $v->answer !!} 							
						</div>
					</div>
				</div>
				@endforeach
				
			</div>					
		</div>
	</div>
</div>

@include("includes.usercomment")

@stop
