@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> Genel Ayarlar</h4>
				</div>
				<div class="card-body">
					<form action="{{url("admin/settings")}}" method="POST">
						<div class="input-group mb-3">

							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1"><i class="fa fa-facebook-square"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="Facebbok adresi">
						</div>
						
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">
									<i class="fa fa-twitter-square"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="Twitter adresi">
						</div>
						
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">
									<i class="fa fa-instagram"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="İnstagram adresi">
						</div>
						
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">
									<i class="fa fa-linkedin-square"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="Linkedin adresi">
						</div>
						
						<div class="form-group">
							<textarea class="form-control" name="content" id="editor">Adres</textarea>
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
		.create( document.querySelector( '#editor' ) )
		.catch( error => {
			console.error( error );
		} );
		
	})

</script>

@stop