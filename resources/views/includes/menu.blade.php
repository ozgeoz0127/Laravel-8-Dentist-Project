 <div class="site-mobile-menu">
	<div class="site-mobile-menu-header">
		<div class="site-mobile-menu-close mt-3">
			<span class="icon-close2 js-menu-toggle"></span>
		</div>
	</div>
	<div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->


<div class="site-navbar-wrap">
	<div class="site-navbar-top">
		<div class="container py-2">
			<div class="row align-items-center">
				<div class="col-6">
					<a href="{{$settings["twitter"]}}" class="p-2 pl-0">
						<span class="icon-twitter"></span></a>
					<a href="{{$settings["facebook"]}}" class="p-2 pl-0">
						<span class="icon-facebook"></span></a>
					<a href="{{$settings["linkedin"]}}" class="p-2 pl-0">
						<span class="icon-linkedin"></span></a>
					<a href="{{$settings["instagram"]}}" class="p-2 pl-0">
						<span class="icon-instagram"></span></a>
				</div>
				<div class="col-6">
					<div class="d-flex ml-auto">
						<a href="#" class="d-flex align-items-center ml-auto mr-4">
							<span class="icon-phone mr-2"></span>
							<span class="d-none d-md-inline-block">{{$settings["email"]}}</span>
						</a>
						<a href="#" class="d-flex align-items-center">
							<span class="icon-envelope mr-2"></span>
							<span class="d-none d-md-inline-block">{{$settings["phone"]}}</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="site-navbar">
		<div class="container py-1">
			<div class="row align-items-center">
				<div class="col-2">
					<h2 class="mb-0 site-logo">
						<a href="{{asset('')}}">Dente</a></h2>
				</div>
				<div class="col-10">
					<nav class="site-navigation text-right" role="navigation">
						<div class="container">
							<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
								<a href="#" class="site-menu-toggle js-menu-toggle text-white">
									<span class="icon-menu h3"></span></a></div>

							<ul class="site-menu js-clone-nav d-none d-lg-block">
								@foreach ($settings["menu"] as $k=>$v)
								<li class="@if ($k==0) active @endif @if (isset($v["sub"])) has-children @endif">
										<a href="{{$v["url"]}}">{{$v["text"]}}</a>
										@if (isset($v["sub"]))
											<ul class="dropdown arrow-top">
											@foreach ($v["sub"] as $s)
												<li>
													<a href="{{$s["url"]}}">{{$s["text"]}}</a>
												</li>
											@endforeach
											</ul>
										@endif
																				
									</li>
									
									
								@endforeach

							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>