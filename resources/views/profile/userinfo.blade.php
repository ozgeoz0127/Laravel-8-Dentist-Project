<div class="col-md-12 col-xs-12">
	<h4>Bilgilerinizi Güncelleyin</h4>
	<form action="{{Route("user_update")}}" method="POST">
	@csrf
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<label><b>İSMİNİZ</b></label>
				<input type="text" name="name" class="form-control" required value="{{Auth::user()->name}}">
			</div>
			<div class="col-md-6 col-xs-12">
				<label>
					<b>SOYİSMİNİZ</b></label>
				<input type="text" name="surname" class="form-control" required value="{{Auth::user()->surname}}">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<label><b>EMAİL</b></label>
				<input type="email" name="email" class="form-control" required value="{{Auth::user()->email}}">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<label>
					<b>ŞİFRE</b></label>
				<input type="password" name="password" class="form-control" required value="">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<input type="reset" class="btn btn-danger" value="Temizle">
				<input type="submit" class="btn btn-warning" value="Güncelle">
			</div>

		</div>
	</form>

</div>