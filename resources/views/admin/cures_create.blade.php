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
					<form action="{{route("admin_cure_save")}}" method="POST">
						@csrf
						<div class="form-group">
							<label>Title</label>
							<input type="hidden" name="id" value="0">
							<input type="text" name="title" placeholder="title" class="form-control">
						</div>

						<div clasS="row">
							<div clasS="col-md-6">
								<div class="form-group">
									<label>Keywords</label>
									<input type="text" name="keywords" placeholder="keywords" class="form-control">
								</div>
								<div class="form-group">
									<label>İcon</label>
									<input type="text" name="image" placeholder="icon" class="form-control">
								</div>
							</div>
							<div clasS="col-md-6">
								<div class="form-group">
									<label>Description</label>
									<textarea style="height:115px;max-height:inherit" name="description" placeholder="description" class="form-control"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Detail</label>
							<textarea name="detail" id="detail" placeholder="detail" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label>url</label>
							<input type="text" name="url" readonly="" placeholder="url" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" style="width:100%">Yayın Durumu</label>
							<label >
								<input type="radio" name="status" value="1"> Aktif
							</label>
							<label >
								<input type="radio" name="status"  value="0"> Pasif
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