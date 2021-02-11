@extends('layouts.default')
@section('content')

    <div class="site-blocks-cover ">
        <div id="demo" class="carousel slide" data-ride="carousel" style="height:100%">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner" style="max-height:900px;overflow: hidden">
                @foreach ($settings["slayt"] as $k=>$v)
                    <div class="carousel-item @if ($k==0) active @endif">
                        <img src="{{asset("storage/".($v->image))}}" style="width:100%;" >
                    </div>
                @endforeach
            </div>



            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>


<script>
	$(function(){
		$(".servicelink").hover(
		function(){
			$(this).find(".site-block-feature").css("background","rgba(0, 0, 0, 0.8)");
		},
		function(){
			$(this).find(".site-block-feature").css("background","rgba(0, 0, 0, 0.5)");
		}
		)
	});
</script>

<div class="site-block-1">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<a href="{{url("services/agiz-ve-dis-bakimi")}}" class="servicelink">
					<div class="site-block-feature d-flex p-4 rounded mb-4">
						<div class="mr-3">
							<span class="icon flaticon-tooth font-weight-light text-white h2"></span>
						</div>
						<div class="text">
							<h3>AĞIZ VE DİŞ BAKIMI</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-lg-4">
				<a href="{{url("services/dis-beyazlatma")}}" class="servicelink">
					<div class="site-block-feature d-flex p-4 rounded mb-4">
						<div class="mr-3">
							<span class="icon flaticon-tooth-whitening font-weight-light text-white h2"></span>
						</div>
						<div class="text">
							<h3>DİŞ BEYAZLATMA</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						</div>
					</div>
				</a>
			</div>


			<div class="col-lg-4">
				<a href="{{url("services/onleyici-bakim")}}" class="servicelink">
					<div class="site-block-feature d-flex p-4 rounded mb-4">
						<div class="mr-3">
							<span class="icon flaticon-first-aid-kit font-weight-light text-white h2"></span>

						</div>
						<div class="text">
							<h3>ÖNLEYİCİ BAKIM</h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						</div>
					</div>

				</a>
			</div>

		</div>
	</div>
</div>

</div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h2 style="text-align: center;margin-top:20px">Tüm Tedavilerimiz</h2>

        <div class="row row-items">
            @foreach ($settings["cures"] as $k=>$v)
                <div class="col-md-4">
                    <a href="{{url("services/".$v->url)}}" class="d-flex text-center feature p-4 mb-4">
							<span class="align-self-center w-100">
								<span class="d-block mb-3">
									<span class="{{$v->image}} display-3"></span>
								</span>
								<h3>{{$v->name}}</h3>
							</span>
                    </a>
                </div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>

	</div>

</div>


@stop
