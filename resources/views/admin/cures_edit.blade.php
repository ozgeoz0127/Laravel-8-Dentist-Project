@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Tedavi - Yeni Oluştur</h4>
				</div>
				<div class="card-body">
					<form action="{{route("admin_cure_update",$cure->id)}}" method="POST">
						@csrf
						<div class="form-group">
							<label>Title</label>
							<input type="text" value="{{$cure->title}}" name="title" placeholder="title" class="form-control">
						</div>

						<div clasS="row">
							<div clasS="col-md-6">
								<div class="form-group">
									<label>Keywords</label>
									<input type="text" value="{{$cure->keywords}}" name="keywords" placeholder="keywords" class="form-control">
								</div>
								<div class="form-group">
									<label>İcon</label>
									<input type="text" value="{{$cure->image}}" name="image" placeholder="icon" class="form-control">
								</div>
							</div>
							<div clasS="col-md-6">
								<div class="form-group">
									<label>Description</label>
									<textarea style="height:115px;max-height:inherit" name="description" placeholder="description" class="form-control">{{$cure->description}}</textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Detail</label>
							<textarea name="detail"  id="detail" placeholder="detail" class="form-control">{{$cure->detail}}</textarea>
						</div>
						<div class="form-group">
							<label>url</label>
							<input type="text" value="{{$cure->url}}" name="url" readonly="" placeholder="url" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" style="width:100%">Yayın Durumu</label>
							<label >
								<input type="radio" name="status" value="1" @if ($cure->status == 1) checked @endif > Aktif
							</label>
							<label >
								<input type="radio" name="status"  value="0" @if ($cure->status == 0) checked @endif> Pasif
							</label>
						</div>
						<div class="form-group">
							<input type="reset" value="Temizle" class="btn btn-warning">
							<input type="submit" value="Kaydet" class="btn btn-success">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(function() {
		$('#detail').summernote({  height: 250});
		$("[name='title']").keyup(function() {
			$("[name='url']").val(SURL($(this).val()));
		});

		function SURL (link)
		{
			var trMap = {
				'çÇ':'c',
				'ğĞ':'g',
				'şŞ':'s',
				'üÜ':'u',
				'ıİ':'i',
				'öÖ':'o'
			};

			for (var key in trMap) {
				link = link.replace(new RegExp('['+key+']','g'), trMap[key]);
			}
			return  link.replace(/[^-a-zA-Z0-9\s]+/ig, '')
			.replace(/\s/gi, "-")
			.replace(/[-]+/gi, "-")
			.toLowerCase();
		}
	});
</script>

@stop