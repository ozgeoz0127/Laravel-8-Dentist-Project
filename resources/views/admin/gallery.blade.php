@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> İmage Galeri</h4>
				</div>
				<div class="card-body ">
					<div class="col-md-12 col-xs-12 bg-light">
					<div class="row ">
							<form action="{{url("admin/gallerys")}}" class="row col-md-12 col-xs-12" method="POST" enctype="multipart/form-data">
							@csrf
							<h5 class="col-md-12 col-xs-12">Yeni Resim Yükle</h5>
								<div class="form-group col-md-3 col-xs-6">
									<label class="control-label">İlgili Tedavi</label>
									<select name="tedavi_id" class="form-control">
										@foreach ($cures as $k=>$v)
											<option value="{{$v["id"]}}">{{$v["name"]}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group col-md-3 col-xs-6">
									<label class="control-label">Resim Başlık</label>
									<input type="text" class="form-control" name="title">
								</div>
								<div class=" col-md-3 col-xs-6">
									<label class="control-label">Dosya Seçiniz</label>
									<input type="file"  class="form-control" name="image" required accept="image/x-png,image/gif,image/jpeg">
								</div>
								<div class=" col-md-2 col-xs-12">
									<input type="submit" class="form-control btn btn-success" style="margin-top:21px" value="Kaydet">
								</div>

							
						</form>
					</div>
					</div>
					<div clasS="row">
						<div clasS="row col-md-12 col-xs-12">
							@foreach ($gallery as $k=>$v)
							<div class="card col-md-3 col-xs-6" >
								<div class="removediv">
									<a href="{{url("admin/gallerys/delete/".$v["id"])}}" data-toggle="tooltip" data-placement="top" title="Kaldır">
										<i class="fa fa-times text-danger"></i>
									</a>
								</div>
								<img class="card-img-top" src="{{asset("images/uploads/".$v["image"])}}" style="width:100%">
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	.removediv {
		position:absolute;
		z-index:10;
		width:90%;
		height:100%;
		text-align:right
	}
	.removediv a {
		font-size:35px;

	}
</style>

@stop