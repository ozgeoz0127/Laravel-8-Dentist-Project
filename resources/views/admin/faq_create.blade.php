@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Sık Sorulan Soru - Yeni Oluştur</h4>
				</div>
				<div class="card-body">
					<form action="{{route("admin_faq_save")}}" method="POST">
					@csrf
							<div class="form-group">
								<label>Soru</label>
								<input type="text" name="question" required placeholder="Soru" class="form-control">
							</div>
							<div class="form-group">
								<label>Cevap</label>
								<textarea  name="answer" required id="answer" placeholder="answer" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label class="control-label" style="width:100%">Yayın Durumu</label>
								<label >
									<input type="radio" name="status" value="1" checked> Aktif
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
		$('#answer').summernote({  height: 250});


	});
</script>

@stop