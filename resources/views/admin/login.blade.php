<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>
		Yönetim Paneli
	</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<!-- CSS Files -->
	<link href="{{asset("css/admin/bootstrap.min.css")}}" rel="stylesheet" />
	<link href="{{asset("css/admin/paper-dashboard.css?v=2.0.1")}}" rel="stylesheet" />
	<link href="{{asset("css/admin/perfectscrollbar.css?v=2.0.1")}}" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{asset("css/admin/demo.css")}}" rel="stylesheet" />
</head>
<body class=" ps-container ps-theme-default" style="    background-color: #f4f3ef;">
		<div class="container">
			<div class="col-lg-4 col-md-6 ml-auto mr-auto" style="margin-top:15vh">
				<form class="form" method="POST" id="loginform" action="{{route("login")}}">
					@csrf
					<div class="card card-login">
						<div class="card-header ">
							<div class="card-header ">
								<h3 class="header text-center">Yönetim Paneli</h3>
							</div>
						</div>
						<div class="card-body ">
                            @include('includes.message')
                            <div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="nc-icon nc-single-02"></i>
									</span>
								</div>
								<input type="text" name="email" class="form-control" autocomplete="off" placeholder="Mail adresi...">
							</div>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										<i class="nc-icon nc-key-25"></i>
									</span>
								</div>
								<input type="password" name="password" autocomplete="off" placeholder="Şifre..." class="form-control">
							</div>
						</div>
						<div class="card-footer ">
							<input type="submit" class="btn btn-warning btn-round btn-block mb-3" value="Sisteme Giriş">
							<div class="load col-md-12 col-xs-12"></div>

                        </div>
					</div>
				</form>
			</div>
		</div>

</body>
	<script src="{{asset("js/admin/core/jquery.min.js")}}"> </script>
	<script src="{{asset("js/admin/core/popper.min.js")}}"> </script>
	<script src="{{asset("js/admin/core/bootstrap.min.js")}}"> </script>
	<script>
		$(function(){
            /*
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$("#loginform").submit(function() {

				event.preventDefault();
				formurl 	= $(this).attr("action");
				load = $(".load");
				load.html("<span class='text-info'>Bekleyiniz...</span>");

				$.ajax({
					method: "POST",
					url: formurl,
					data: $(this).serialize()
				}).done(function(c) {
					if (c.auth && c.role=="1") {
						load.html("<span class='text-success'>Hoşgeldiniz.</span>");
						setTimeout(function() {
							location.href = formurl.replace("login","admin");

						} ,1500);
					} else {
						load.html("<span class='text-danger'>Bilgilerinii kontrol ediniz...</span>");
					}
				});
				return false;

			});*/

		});
	</script>

</html>
