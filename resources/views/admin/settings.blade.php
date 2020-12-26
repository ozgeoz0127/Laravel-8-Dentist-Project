@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> Genel Ayarlar</h4>
				</div>
				<div class="card-body col-md-12 col-xs-12">

					<form action="{{url("admin/settings")}}" id="settingsform" method="POST">
					@csrf
						<div clasS="row">
							<div class=" col-md-6 col-xs-12">
								<div class="input-group mb-3">

									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">
											<i class="fa fa-file-text"></i></span>
									</div>
									<input type="text" name="title" value="{{$settings["title"]}}" class="form-control" placeholder="Title">
								</div>
								<div class="input-group mb-3">

									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">
											<i class="fa fa-file-text"></i></span>
									</div>
									<input type="text" name="keywords" value="{{$settings["keywords"]}}" class="form-control" placeholder="Keywords">
								</div>
								<div class="input-group mb-3">

									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">
											<i class="fa fa-file-text"></i></span>
									</div>
									<textarea class="form-control" name="description" placeholder="Description">{{$settings["description"]}}</textarea>
								</div>
								<div class="input-group mb-3">

									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">
											<i class="fa fa-facebook-square"></i></span>
									</div>
									<input type="text" name="company" value="{{$settings["company"]}}" class="form-control" placeholder="Company">
								</div>
								

								<div class="form-group">
									<textarea class="form-control" name="address" id="address">{{$settings["address"]}}</textarea>
								</div>
							</div>
							<div class=" col-md-6 col-xs-12">
							
								<div class="input-group mb-3">

									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">
											<i class="fa fa-facebook-square"></i></span>
									</div>
									<input type="text" name="facebook" value="{{$settings["facebook"]}}" class="form-control" placeholder="Facebook adresi">
								</div>

								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">
											<i class="fa fa-twitter-square"></i></span>
									</div>
									<input type="text" name="twitter" value="{{$settings["twitter"]}}" class="form-control" placeholder="Twitter adresi">
								</div>

								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">
											<i class="fa fa-instagram"></i></span>
									</div>
									<input type="text" name="instagram" value="{{$settings["instagram"]}}" class="form-control" placeholder="İnstagram adresi">
								</div>
							
								<div class="input-group mb-3">

									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">
											<i class="fa fa-envelope"></i></span>
									</div>
									<input type="text" name="smtpserver" value="{{$settings["smtpserver"]}}" class="form-control" placeholder="Smtp Server">
								</div>

								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">
											<i class="fa fa-envelope-o"></i></span>
									</div>
									<input type="text" name="smtpemail" value="{{$settings["smtpemail"]}}" class="form-control" placeholder="Smtp Email">
								</div>

								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1">
											<i class="fa fa-key"></i></span>
									</div>
									<input type="text" name="smtppassword" value="{{$settings["smtppassword"]}}" class="form-control" placeholder="Smtp Password">
									<input type="text" name="smtpport" value="{{$settings["smtpport"]}}" class="form-control" placeholder="Smtp Port">
								</div>

							</div>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-info" value="Ayarları Kaydet">
							<input type="reset" class="btn btn-danger" value="Temizle">
						</div>
					</form>	
				</div>
				
				
				
			</div>
		</div>
	</div>
</div>
<script>
	$(function(){
		ClassicEditor
		.create( document.querySelector('#address') )
		.then( editor => {
			console.log( 'Editor was initialized', editor );
			myEditor = editor;
		} )
		.catch( error => {
			console.error( error );
		} );
		
		$("#settingsform").submit(function(){
			
			$("#address").val(myEditor.getData());
			return true;
			
		});
		
		
	})

</script>

@stop