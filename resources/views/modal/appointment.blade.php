 <div class="modal " id="reservationmodal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Rezervasyon</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" action='{{Route("appointment")}}' name="appointment" id="appointment">
					
					<p>Üyemiz değilseniz bilgilerinizle otomatik üyelik açılacaktır. </p>
					<p><input @if (Auth::check()) readonly @endif value="{{Auth::user()->name ?? ""}}" type="text" class="form-control" name="name" id="name" placeholder="Adınız" required></p>
					<p><input @if (Auth::check()) readonly @endif value="{{Auth::user()->surname ?? ""}}" type="text" class="form-control" name="surname" id="surname" placeholder="Soyadınız" required></p>
					<p><input @if (Auth::check()) readonly @endif value="{{Auth::user()->email ?? ""}}" type="email" class="form-control" name="email" id="email" placeholder="E-mail" required></p>
					<p class="row" style="margin-right: 0px;margin-left: 0px;">
						<input required type="text" class="form-control date" style="width:49%;float:left" name="date" id="date" placeholder="Tarih" autocomplete="off">
						<input required type="number" class="form-control" style="width:24%;float:right;margin-left:5px" name="hour" id="hour" placeholder="Saat" autocomplete="off">
						<input required type="number" class="form-control" style="width:24%;float:right;margin-left:5px" name="minute" id="minute" placeholder="Dakika" autocomplete="off">
						
					</p>
					<p >
						<select id="doctor" name="doctor" required class="form-control">
							<option value="0" disabled selected hidden>Doktor seçiniz</option>
							@foreach ($settings["doctors"] as $k=>$v)
							<option value="{{$v["id"]}}">{{$v["name"]." ".$v["surname"]}} </option>
							@endforeach
						</select>
						
					</p>
					
					<p >

						<select id="cure" name="cure" required class="form-control">
							<option value="0" disabled selected hidden>Tedavi seçiniz</option>
							@foreach ($settings["cures"] as $k=>$v)
							<option value="{{$v->id}}">{{$v->name}} </option>
							@endforeach
						</select>

					</p>

					<div class="row">
						<div class="col-md-3">
							<button type="submit" class="btn btn-info">Kaydet</button>
						</div>
						<div class="col-md-9 text-right load" style="line-height:36px"></div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script>
	$(function(){
		
		$('.date').datepicker({
			language: "tr",
			autoclose: true

		});
		
		$("#appointment").submit(function() {
			event.preventDefault();
			formurl 	= $(this).attr("action");
			load = $("#appointment .load");
			if ($("#doctor").val() == null ) {
				load.html("<span class='text-danger'>Lütfen Doktor seçiniz...</span>");
				return false;
			}
			if ($("#cure").val() == null ) {
				load.html("<span class='text-danger'>Lütfen Tedavi seçiniz...</span>");
				return false;
			}
			load.html("<span class='text-info'>Bekleyiniz...</span>");
			
			$.ajax({
				method: "POST",
				url: formurl,
				data: $(this).serialize()
			}).done(function(c) {
				if ($.isNumeric(c)) {
					load.html("<span class='text-success'>Randevunuz başarı ile kaydedildi.</span>");
					setTimeout(function(){
						$('#reservationmodal').modal("hide")

					} ,1500);						
				}else {
					load.html("<span class='text-danger'>Bir hata oluştu...</span>");		
				}
			});
			return false;
			
		});
		
		
	});
</script>