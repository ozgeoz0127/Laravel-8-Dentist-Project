<!DOCTYPE html>
<html lang="tr">

	<head>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
		<link rel="icon" type="image/png" href="../assets/img/favicon.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
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
		<link href="{{asset("css/admin/demo.css?123")}}" rel="stylesheet" />
		<script src="{{asset("js/admin/core/jquery.min.js")}}"> </script>
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"> </script>
	</head>
<script>
		$(function() {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});


		})	
</script>
	<body class="">
		<div class="wrapper ">
			@include("admin.includes.sidebar")
			<div class="main-panel">
				@include("admin.includes.navbar")
				@yield("content")
				@include("admin.includes.footer")
			</div>
		</div>
		<!--   Core JS Files   -->

		<script src="{{asset("js/admin/core/popper.min.js")}}"> </script>
		<script src="{{asset("js/admin/core/bootstrap.min.js")}}"> </script>
		<script src="{{asset("js/admin/plugins/perfect-scrollbar.jquery.min.js")}}"> </script>
		<!-- Chart JS -->
		<script src="{{asset("js/admin/plugins/chartjs.min.js")}}"> </script>

		<!--  Notifications Plugin    -->
		<script src="{{asset("js/admin/plugins/bootstrap-notify.js")}}"> </script>
		<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
		<script src="{{asset("js/admin/paper-dashboard.js?".time())}}" type="text/javascript"> </script>
		<script src="{{asset("js/admin/demo.js")}}"> </script>

		<script >
			$(function(){
				$('[data-toggle="tooltip"]').tooltip();

				$(".sidebar a[href='"+(location.href)+"']").parent().addClass("active")				
			});
		</script>
	</body>

</html>
