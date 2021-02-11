 <footer class="site-footer border-top">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mb-5 mb-lg-0">
				<div class="row mb-5">
					<div class="col-md-12">
						<h3 class="footer-heading mb-4">Site Haritası</h3>
					</div>
					<div class="col-md-12 col-lg-12">
						<ul class="list-unstyled">

							<li><a href="{{route("about")}}">Hakkımızda</a></li>
														<li><a href="{{route("contact")}}">İletişim</a></li>

						</ul>
					</div>
				</div>


			</div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Takip Edin</h3>
                        <div>
                            <a href="{{$settings["facebook"]}}" target="_blank" class="pl-0 pr-3">
                                <span class="icon-facebook"></span></a>
                            <a href="{{$settings["twitter"]}}" target="_blank" class="pl-3 pr-3">
                                <span class="icon-twitter"></span></a>
                            <a href="{{$settings["instagram"]}}" target="_blank" class="pl-3 pr-3">
                                <span class="icon-instagram"></span></a>
                        </div>
                    </div>
                </div>
            </div>

		</div>

	</div>
</footer>
</div>



<script src="{{asset('js/owl.carousel.min.js')}}"> </script>
<script src="{{asset('js/jquery.stellar.min.js')}}"> </script>
<script src="{{asset('js/jquery.countdown.min.js')}}"> </script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"> </script>
<script src="{{asset('js/bootstrap-datepicker.min.js')}}"> </script>
<script src="{{asset('js/aos.js')}}"> </script>
<script src="{{asset('js/main.js')}}"> </script>
<script src="{{asset('js/dente.js?'.time())}}"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.tr.min.js" integrity="sha512-fIZStvQgU9hAKeI9ovYv2kAv8oBsXHmxoea+RHi3684K1jriiTSvcjF+h0iRzkaZWC8NlmPGd4SIlCIx9uRdCw==" crossorigin="anonymous"> </script>

</body>
</html>
