@extends('layouts.default')
@section('content')
<div class="site-blocks-cover aos-init aos-animate inner-page" style="height:200px;min-height:150px;background-image: url({{asset("images/hero_bg_2.jpg")}});" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 col-xs-12 pagestitle">
				<h1>
					<strong>Galeri</strong></h1>
			</div>
		</div>
	</div>
</div>

<div class="site-section section-about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 pr-md-12 text-left mb-5">

					@foreach ($settings["gallery"] as $k=>$v)
					<a href="{{url("images/uploads/".$v["image"])}}"  data-toggle="lightbox" data-gallery="gallery" >
					<img src="{{url("images/uploads/".$v["image"])}}" class="img-fluid img-thumbnail col-md-3 col-xs-6">
					</a>
					@endforeach


			</div>
		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"> </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">


<script>
$(function(){

	$(document).on("click", '[data-toggle="lightbox"]', function(event) {
		event.preventDefault();
		$(this).ekkoLightbox();
	});		
	
})
</script>

@stop
