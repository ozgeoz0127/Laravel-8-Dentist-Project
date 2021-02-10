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
					<a href="{{$settings["twitter"]}}" target="_blank" class="p-2 pl-0">
						<span class="icon-twitter"></span></a>
					<a href="{{$settings["facebook"]}}" target="_blank" class="p-2 pl-0">
						<span class="icon-facebook"></span></a>
					<a href="{{$settings["instagram"]}}" target="_blank" class="p-2 pl-0">
						<span class="icon-instagram"></span></a>
				</div>
				<div class="col-6">
					<div class="d-flex ml-auto">
						<a href="{{$settings["email"]}}" target="_blank" class="d-flex align-items-center ml-auto mr-4">
							<span class="icon-phone mr-2"></span>
							<span class="d-none d-md-inline-block">{{$settings["email"]}}</span>
						</a>
						<a href="{{$settings["phone"]}}" target="_blank" class="d-flex align-items-center">
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
						<a href="{{route("home")}}">Dente</a></h2>
				</div>
				<div class="col-10">
					<nav class="site-navigation text-right" role="navigation">
						<div class="container">
							<div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
								<a href="#" class="site-menu-toggle js-menu-toggle text-white">
									<span class="icon-menu h3"></span></a></div>

							<ul class="site-menu js-clone-nav d-none d-lg-block">
								<li >
									<a href="{{route("home")}}">Home</a>
								</li>
								<li class="  has-children ">
									<a href="{{route("about")}}">Hakkımızda</a>
									<ul class="dropdown arrow-top">
										<li>
											<a href="{{route("about")}}" >Hakkımızda</a>
											<a href="{{route("references")}}" >Referanslar</a>
										</li>

									</ul>

								</li>

								<li class="  has-children ">
									<a href="#">Servisler</a>
									<ul class="dropdown arrow-top">
										<li>
											@foreach ($settings["cures"] as $cure)
											<a href="{{route("services",$cure->url)}}" >{{$cure->name}}</a>
											@endforeach
										</li>

									</ul>

								</li>

								<li >
									<a href="{{route("faq")}}">S.S.S</a>
								</li>
								<li >
									<a href="{{route("gallery")}}">Galeri</a>
								</li>
								<li >
									<a href="{{route("contact")}}">İletişim</a>
								</li>
								@if(Auth::check())
								<li class="  has-children ">
									<a href="#">Bilgilerim</a>
									<ul class="dropdown arrow-top">
										<li>
											<a href="{{route("profile_userinfo")}}" >Bilgilerim</a>
											<a href="{{route("profile_appointment")}}" >Randevularım</a>
											<a href="{{route("profile_review")}}" >Yorumlarım</a>
											<a href="{{route("logout")}}" >Çıkış</a>
										</li>

									</ul>

								</li>
								@else
								<li>
									<a  data-toggle="modal" href="#loginmodal" class="btn btn-primary" style="font-weight: bold;font-size: 12px; padding: 5px 10px;">ÜYELik</a>
								</li>
		@endif


								<li>
									<a  data-toggle="modal" href="#reservationmodal" class="btn btn-success" style="font-weight: bold;font-size: 12px; padding: 5px 10px;">RANDEVU</a>
								</li>



							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>

@include("modal.appointment")
@include("modal.login")



