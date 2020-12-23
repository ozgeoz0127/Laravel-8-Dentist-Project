@extends('layouts.default')
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
				<div class="card">
					<div class="card-header" id="heading{{$k}}">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$k}}" aria-expanded="true" aria-controls="collapse{{$k}}">
								{{$v["query"]}}
							</button>
						</h5>
					</div>

					<div id="collapse{{$k}}" class="collapse @if ($k == 0) show @endif" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							{{$v["answer"]}} Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
							
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
