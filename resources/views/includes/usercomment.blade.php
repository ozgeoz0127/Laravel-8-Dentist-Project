<div class="site-section section-about bg-light" style="padding:2em 0">
	<div class="container">
		<div class="row">
			<div class="col-md-12 pr-md-12 text-left mb-5">
				@if(!Auth::check())
					<div class="col-md-12 col-xs-12 uyelogin" style="z-index:10;background:#fff;opacity:0.7;position:absolute">
						<span class="col-md-12 col-xs-12 text-danger" style="font-weight:bold;padding-left: 35%;min-height:300px">Yorum Yapmak için üye girişi yapınız</span>
					</div>
				@endif

				<form action="#" id="commentform" class="p-5 ">
					<div class="row form-group">
						<h3 ><strong>Yorumunuz</strong> Bizim için değerli</h3>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<input type="hidden" name="user" id="user" value="@if(!Auth::check()) 0 @else {{Auth::user()->id}} @endif">
							<textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Yorumunuz"></textarea>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<input type="submit" value="Gönder" class="btn btn-primary">
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>
</div>
<script>
	$(function(){
		$( window ).resize(function() {
			uyelogincheck();
		});
		uyelogincheck();
		function uyelogincheck(){
			$(".uyelogin").height($("#commentform").outerHeight());
			$(".uyelogin").width($("#commentform").outerWidth() -30);
			$(".uyelogin>span").css("top",($("#commentform").outerHeight() / 2.1 ))
		}

	});
</script>
