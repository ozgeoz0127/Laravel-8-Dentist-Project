@extends('layouts.default')
@section('content')
<div class="site-blocks-cover aos-init aos-animate inner-page" style="height:200px;min-height:150px;background-image: url({{asset("images/hero_bg_2.jpg")}});" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row ">
			<div class="col-md-12 col-xs-12 pagestitle" >
				<h1 >
					<strong>{{Auth::user()->name ." ". Auth::user()->surname}}</strong></h1>
			</div>
		</div>
	</div>
</div>


<div class="site-section section-about">
	<div class="container">
		<div class="row">
			<div class="col-md-3 pr-md-3 text-left mb-5">
				<ul class="list-unstyled">
					<li>
						<a href="{{url('/profile/userinfo')}}" class="profilelink">Bilgilerim</a>
					</li>
					<li>
						<a href="{{url("/profile/appointment")}}" class="profilelink">Randevularım</a>
					</li>
					<li>
						<a href="{{url("/logout")}}" class="profilelink">Çıkış</a>
					</li>
				</ul>
			
			</div>
		</div>
	</div>
</div>

<script>
	$(function(){
		$("a[href='"+(location.href)+"']").addClass("active");
	});
</script> 

@stop
