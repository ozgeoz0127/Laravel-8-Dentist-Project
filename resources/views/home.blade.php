@include('layouts.header')


<div class="site-blocks-cover " style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-7">
				<span class="sub-text">Önceliğimiz</span>
				<h1>Sağlıklı
					<strong>Gülüşünüz</strong></h1>
			</div>
		</div>
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
				<a href="asd" class="servicelink">
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
				<a href="asd" class="servicelink">
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
				<a href="asd" class="servicelink">
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

 <div class="site-section site-block-3 ">
	<div class="container">
		<div class="row mb-5 justify-content-center">
			<div class="col-md-6 text-center">
				<h2 class="site-heading text-black mb-5">Verilen
					<strong>Hizmetler</strong></h2>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="row row-items">
					<div class="col-md-4">
						<a href="#" class="d-flex text-center feature p-4 mb-4">
							<span class="align-self-center w-100">
								<span class="d-block mb-3">
									<span class="flaticon-dentist-chair display-3"></span>
								</span>
								<h3>Genel Kontrol</h3>
							</span>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#" class="d-flex text-center feature p-4 mb-4">
							<span class="align-self-center w-100">
								<span class="d-block mb-3">
									<span class="flaticon-dentist-tools display-3"></span>
								</span>
								<h3>Dolgu Kanal Tedavisi</h3>
							</span>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#" class="d-flex text-center feature p-4 mb-4">
							<span class="align-self-center w-100">
								<span class="d-block mb-3">
									<span class="flaticon-tooth-pliers display-3"></span>
								</span>
								<h3>Diş Çekimi</h3>
							</span>
						</a>
					</div>
				</div>
				<div class="row row-items ">
					<div class="col-md-4">
						<a href="#" class="d-flex text-center feature p-4 mb-4">
							<span class="align-self-center w-100">
								<span class="d-block mb-3">
									<span class="flaticon-first-aid-kit display-3"></span>
								</span>
								<h3>Önleyici Bakım</h3>
							</span>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#" class="d-flex text-center feature p-4 mb-4">
							<span class="align-self-center w-100">
								<span class="d-block mb-3">
									<span class="flaticon-tooth-whitening display-3"></span>
								</span>
								<h3>Diş Beyazlatma</h3>
							</span>
						</a>
					</div>
					<div class="col-md-4">
						<a href="#" class="d-flex text-center feature p-4 mb-4">
							<span class="align-self-center w-100">
								<span class="d-block mb-3">
									<span class="flaticon-tooth display-3"></span>
								</span>
								<h3>Ağız ve Diş Bakımı</h3>
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="promo py-5 bg-primary">
	<div class="container text-center">
		<span class="d-block h4 mb-3 font-weight-light text-white"> Yeni yılda Diş temizleme ve Beyazlatma
			<strong class="font-weight-bold">%50</strong> indirim !</span>
		<div id="date-countdown" class="mt-0"></div>
	</div>
</div>

<div class="site-block-half d-block d-lg-flex site-block-video">
	<div class="image bg-image order-2" style="background-image: url(images/hero_bg_1.jpg); ">
		<a href="https://www.youtube.com/watch?v=pDDCKGV8cuM" class="play-button popup-youtube">
			<span class="icon-play"></span></a>
	</div>
	<div class="text order-1">
		<h2 class="site-heading text-black mb-3">Başarı
			<strong>Öykümüz</strong></h2>
		<p class="lead">''Kendine yapılmasını istemediğin davranışı başkasına yapma!'' düsturunu ilkelerinden biri olarak benimseyen kurumumuz, hastalarımızın tüm haklarına saygılı davranmaya, sadece tedavi etmeye değil, bireyi ağız ve diş sağlığını korumaya yönelik bilgilendirmeye de özen göstermekteyiz.</p>
		<p>Kurulduğumuz yıldan bu yana, sadece bölgemizde değil, tüm ülke çapında referans gösterilen kurumumuzun hedefi; daha iyi hizmet ve daha ileri teknoloji ile her geçen gün başarısını arttırarak hizmetlerine devam etmektir.</p>
	</div>

</div>


@include('layouts.footer')
