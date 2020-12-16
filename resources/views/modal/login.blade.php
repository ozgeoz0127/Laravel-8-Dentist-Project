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
				<div class="col-md-12 col-xs-12 text-right" style="padding-left:0px;padding-right:0px">
					<a href="javascript:;" id="loginformbutton"  class="col-md-6 col-xs-6 active">Giriş Formu</a>
					<a href="javascript:;" id="registerbuttonbutton"  class="col-md-6 col-xs-6 ">Üyelik Formu</a>
				</div>
				<div class="col-md-12 col-xs-12 loginform" style="padding-left:0px;padding-right:0px">
					<form method="post" action='{{asset("login")}}' id="loginform">
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
					<form method="post" action='{{asset("login")}}' id="registerform">
						<p><input type="text" class="form-control" name="name" placeholder="Ad"></p>
						<p><input type="text" class="form-control" name="surname" placeholder="Soyad"></p>
						<p><input type="text" class="form-control" name="email" placeholder="Email"></p>
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
				if ($.isNumeric(c)) {
					load.html("<span class='text-success'>Randevunuz başarı ile kaydedildi.</span>");
					setTimeout(function() {
						$('#reservationmodal').modal("hide")

					} ,1500);
				} else {
					load.html("<span class='text-danger'>Bir hata oluştu...</span>");
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