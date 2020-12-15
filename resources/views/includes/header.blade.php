<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Dente - {{$settings["title"]?? null}}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
		<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
		<link rel="stylesheet" href="{{ asset('css/aos.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css?'.time()) }}">
		<script src="{{asset('js/jquery-3.3.1.min.js')}}"> </script>
		<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"> </script>
		<script src="{{asset('js/jquery-ui.js')}}"> </script>
		<script src="{{asset('js/popper.min.js')}}"> </script>
		<script src="{{asset('js/bootstrap.min.js')}}"> </script>

</head>
<body>
	<div class="site-wrap">
	@include('includes.menu')