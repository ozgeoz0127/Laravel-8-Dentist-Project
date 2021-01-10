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
				
				
					<div class="row">

						<div class="col-md-12 col-xs-12 ">
						@include('includes.message')
						<form action="{{Route("admin_setting_save")}}" id="settingsform" method="POST">
						@csrf
							<nav>
								<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Genel Ayarlar</a>
									<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sosyal Medya</a>
									<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">SMTP Mail</a>
									<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Hakkında Sayfası</a>
										<a class="nav-item nav-link" id="nav-references-tab" data-toggle="tab" href="#nav-references" role="tab" aria-controls="nav-about" aria-selected="false">Referanslar Sayfası</a>
								</div>
							</nav>
							<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
								<div clasS="col-md-12 col-xs-12">

										<div class="input-group ">
											<label class="control-label" style="widtH:100%">Site Başlığı</label>
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">
													<i class="fa fa-file-text"></i></span>
											</div>
											<input type="text" name="title" value="{{$settings["title"]}}" class="form-control" placeholder="Title">
										</div>
										<div class="input-group ">
											<label class="control-label" style="widtH:100%">Meta Keywords</label>
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">
													<i class="fa fa-file-text"></i></span>
											</div>
											<input type="text" name="keywords" value="{{$settings["keywords"]}}" class="form-control" placeholder="Keywords">
										</div>
										<div class="input-group ">
											<label class="control-label" style="widtH:100%">Meta Description</label>
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">
													<i class="fa fa-file-text"></i></span>
											</div>
											<textarea class="form-control" name="description" placeholder="Description">{{$settings["description"]}}</textarea>
										</div>
										<div class="input-group ">
											<label class="control-label" style="widtH:100%">Firma ismi</label>
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">
													<i class="fa fa-facebook-square"></i></span>
											</div>
											<input type="text" name="company" value="{{$settings["company"]}}" class="form-control" placeholder="Company">
										</div>


										<div class="form-group">
											<label class="control-label" style="widtH:100%">Adres</label>
											<textarea class="form-control" name="address" id="address">{{$settings["address"]}}</textarea>
										</div>	
										<div class="input-group ">
											<label class="control-label" style="widtH:100%">Telefon</label>
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">
													<i class="fa fa-envelope"></i></span>
											</div>
												<input type="text" name="email" value="{{$settings["email"]}}" class="form-control" placeholder="Email">
										</div>
										
											
										<div class="input-group ">
											<label class="control-label" style="widtH:100%">Telefon</label>
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">
													<i class="fa fa-phone"></i></span>
											</div>
											<input type="text" name="phone" value="{{$settings["phone"]}}" class="form-control" placeholder="Phone">
										</div>
										<div class="input-group ">
											<label class="control-label" style="widtH:100%">Telefon</label>
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">
													<i class="fa fa-phone"></i></span>
											</div>
												<input type="text" name="fax" value="{{$settings["fax"]}}" class="form-control" placeholder="Fax">
										</div>
										
																	
								</div>
								</div>
								<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
									<div clasS='col-md-12 col-xs-12'>
										<div class="input-group mb-3">
											<label class="control-label" style="widtH:100%">Facebook Adresi</label>
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">
													<i class="fa fa-facebook-square"></i></span>
											</div>
											<input type="text" name="facebook" value="{{$settings["facebook"]}}" class="form-control" placeholder="Facebook adresi">
										</div>

										<div class="input-group mb-3">
											<label class="control-label" style="widtH:100%">Twitter Adresi</label>
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">
													<i class="fa fa-twitter-square"></i></span>
											</div>
											<input type="text" name="twitter" value="{{$settings["twitter"]}}" class="form-control" placeholder="Twitter adresi">
										</div>

										<div class="input-group mb-3">
											<label class="control-label" style="widtH:100%">İnstagram Adresi</label>
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1">
													<i class="fa fa-instagram"></i></span>
											</div>
											<input type="text" name="instagram" value="{{$settings["instagram"]}}" class="form-control" placeholder="İnstagram adresi">
										</div>										
									</div>
								</div>
								<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
								<div class="col-md-12 col-xs-12">
									<div class="input-group mb-3">
										<label class="control-label" style="widtH:100%">SMTP Server</label>
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">
												<i class="fa fa-envelope"></i></span>
										</div>
										<input type="text" name="smtpserver" value="{{$settings["smtpserver"]}}" class="form-control" placeholder="Smtp Server">
									</div>

									<div class="input-group mb-3">
										<label class="control-label" style="widtH:100%">SMTP Email</label>
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">
												<i class="fa fa-envelope-o"></i></span>
										</div>
										<input type="text" name="smtpemail" value="{{$settings["smtpemail"]}}" class="form-control" placeholder="Smtp Email">
									</div>

									<div class="input-group mb-3">
										<label class="control-label" style="widtH:100%">SMTP Şifre & Port</label>
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">
												<i class="fa fa-key"></i></span>
										</div>
										<input type="text" name="smtppassword" value="{{$settings["smtppassword"]}}" class="form-control" placeholder="Smtp Password">
										<input type="text" name="smtpport" value="{{$settings["smtpport"]}}" class="form-control" placeholder="Smtp Port">
									</div>									
								</div>
								</div>
								<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
									<div class="col-md-12 col-xs-12">
										<div class="form-group">
											<label class="control-label" style="widtH:100%">Hakkımızda Sayfası</label>
												<textarea name="aboutus" id="aboutus" class="form-control">{{$settings["aboutus"]}}</textarea>

										</div>	
									</div>
								</div>
									<div class="tab-pane fade" id="nav-references" role="tabpanel" aria-labelledby="nav-about-references">
									<div class="col-md-12 col-xs-12">
										<div class="form-group">
											<label class="control-label" style="widtH:100%">Referanslar Sayfası</label>
												<textarea name="references" id="references" class="form-control">{{$settings["references"]}}</textarea>

										</div>
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
				
<script>
$(function(){
		$('#aboutus').summernote({  height: 250});
		$('#references').summernote({  height: 250});
	
});
</script>
				
			</div>
		</div>
	</div>
</div>
<script>



</script>

@stop