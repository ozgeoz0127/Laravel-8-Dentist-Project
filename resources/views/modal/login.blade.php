 <div class="modal " id="loginmodal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Üye Girişi / Üye Ol</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-md-12 col-xs-12 text-right" style="padding-left:0px;padding-right:0px;margin-bottom:10px">
					<a href="javascript:;" id="loginformbutton"  class="col-md-6 col-xs-6 active">Giriş Formu</a>
					<a href="javascript:;" id="registerbuttonbutton"  class="col-md-6 col-xs-6 ">Üyelik Formu</a>
				</div>
				<div class="col-md-12 col-xs-12 loginform" style="padding-left:0px;padding-right:0px">
					<form method="post" action='{{Route("login")}}' id="loginform">
						<p><input type="text" class="form-control" name="email" placeholder="Email"></p>
						<p><input type="password" class="form-control" name="password" placeholder="Şifre"></p>
						<div class="row">
							<div class="col-md-3">
								<input type="submit" class="btn btn-danger" value="Giriş Yap">
							</div>
							<div class="col-md-9 text-right loadlogin" style="line-height:36px"></div>
						</div>
					</form>
				</div>
				<div class="col-md-12 col-xs-12 registerform" style="display:none;padding-left:0px;padding-right:0px">
					<form method="post" action='{{Route("register")}}' id="registerform">
						<p><input type="text" class="form-control" name="name" placeholder="Ad"></p>
						<p><input type="text" class="form-control" name="surname" placeholder="Soyad"></p>
						<p><input type="text" class="form-control" name="email" placeholder="Email"></p>
						<p><input type="text" class="form-control" name="phone" placeholder="Telefon"></p>
						<p><input type="text" class="form-control" name="address" placeholder="Adres"></p>
						<p><input type="password" class="form-control" name="password" placeholder="Şifre"></p>
						<div class="row">
							<div class="col-md-3">
								<input type="submit" class="btn btn-info" value="Kaydol">
							</div>
							<div class="col-md-9 text-right loadregister" style="line-height:36px"></div>
						</div>
					</form>
				</div>


			</div>
		</div>
	</div>
</div>



<script>
	$(function(){

		$("#registerform").submit(function() {

			event.preventDefault();
			formurl 	= $(this).attr("action");
			load = $(".registerform .loadregister");
			load.html("<span class='text-info'>Bekleyiniz...</span>");


			$.ajax({
				method: "POST",
				url: formurl,
				data: $(this).serialize()
			}).done(function(c) {
				if (c.auth) {
					load.html("<span class='text-success'>Hoşgeldiniz.</span>");
					setTimeout(function() {
						if (c.redirect == "refresh") {
							location.reload(false);
						} else {
							location.href = c.redirect;
						}

					} ,1500);
				} else {
					load.html("<span class='text-danger'>"+c.error+"</span>");
				}
			});
			return false;

		});


		$("#loginform").submit(function(){

			event.preventDefault();
			formurl 	= $(this).attr("action");
			load = $("#loginmodal .loadlogin");
			load.html("<span class='text-info'>Bekleyiniz...</span>");

			$.ajax({
				method: "POST",
				url: formurl,
				data: $(this).serialize()
			}).done(function(c) {
				if (c.auth) {
					load.html("<span class='text-success'>Hoşgeldiniz.</span>");
					setTimeout(function() {
						if (c.redirect == "refresh") {
							location.reload(false);
						}else {
							location.href = c.redirect;
						}

					} ,1500);
				} else {
					load.html("<span class='text-danger'>Bilgilerinii kontrol ediniz...</span>");
				}
			});
			return false;

		});


		$("#registerbuttonbutton").click(function() {
			$(".loginform").hide();
			$(".registerform").show();
			$("#loginmodal .active").removeClass("active");
			$(this).addClass("active");
		});
		$("#loginformbutton").click(function() {
			$(".loginform").show();
			$(".registerform").hide();
			$("#loginmodal .active").removeClass("active");
			$(this).addClass("active");
		});
	})

</script>
