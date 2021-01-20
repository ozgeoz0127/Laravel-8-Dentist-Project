@extends('admin.layouts.default')
@section('content')

 <div class="content">
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="card card-stats">
				<div class="card-body ">
					<div class="row">
						<div class="col-5 col-md-4">
							<div class="icon-big text-center icon-warning">
								<i class="nc-icon nc-single-02 text-warning"></i>
							</div>
						</div>
						<div class="col-7 col-md-8">
							<div class="numbers">
								<p class="card-category">Kullanıcı</p>
								<p class="card-title">{{$usercount}}<p>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer ">
					<hr>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="card card-stats">
				<div class="card-body ">
					<div class="row">
						<div class="col-5 col-md-4">
							<div class="icon-big text-center icon-warning">
								<i class="nc-icon nc-time-alarm text-success"></i>
							</div>
						</div>
						<div class="col-7 col-md-8">
							<div class="numbers">
								<p class="card-category">Randevu</p>
								<p class="card-title">{{$randevucount}}<p>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer ">
					<hr>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="card card-stats">
				<div class="card-body ">
					<div class="row">
						<div class="col-5 col-md-4">
							<div class="icon-big text-center icon-warning">
								<i class="nc-icon nc-favourite-28 text-info"></i>
							</div>
						</div>
						<div class="col-7 col-md-8">
							<div class="numbers">
								<p class="card-category">Yorum</p>
								<p class="card-title">{{$reviewcount}}<p>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer ">
					<hr>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="card card-stats">
				<div class="card-body ">
					<div class="row">
						<div class="col-5 col-md-4">
							<div class="icon-big text-center icon-warning">
								<i class="nc-icon nc-email-85 text-secondary"></i>
							</div>
						</div>
						<div class="col-7 col-md-8">
							<div class="numbers">
								<p class="card-category">İletişim Mesajı</p>
								<p class="card-title">{{$messagecount}}<p>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer ">
					<hr>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="card card-stats">
				<div class="card-body ">
					<div class="row">
						<div class="col-5 col-md-4">
							<div class="icon-big text-center icon-warning">
								<i class="nc-icon nc-bullet-list-67 text-danger"></i>
							</div>
						</div>
						<div class="col-7 col-md-8">
							<div class="numbers">
								<p class="card-category">S.S.S</p>
								<p class="card-title">{{$ssscount}}<p>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer ">
					<hr>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6">
			<div class="card card-stats">
				<div class="card-body ">
					<div class="row">
						<div class="col-5 col-md-4">
							<div class="icon-big text-center icon-warning">
								<i class="nc-icon nc-sound-wave text-primary"></i>
							</div>
						</div>
						<div class="col-7 col-md-8">
							<div class="numbers">
								<p class="card-category">Tedavi Kaydı</p>
								<p class="card-title">{{$tedavicount}}<p>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer ">
					<hr>
				</div>
			</div>
		</div>
		
	</div>
	</div>
</div>

@stop