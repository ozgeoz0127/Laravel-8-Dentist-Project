
<table class="table table-striped">
	<tr>
		<th>Randevu Tarihi</th>
		<th>Doktor</th>
		<th>Tedavi</th>
		<th>Durum</th>
	</tr>

	@foreach ($appointment as $k=>$v)
		<tr>
			<td>{{$v->date ." ". $v->time}}</td>
			<td>{{$settings["doctors"][$v->hekim_id]["name"]." ".$settings["doctors"][$v->hekim_id]["surname"]}}</td>
			<td>{{$settings["cures"][$v->tedavi_id]->name}}</td>
			<td>@if ($v->status == "0") <span class="text-danger">Onay Beleniyor</span> @else <span class="text-success">Onaylandı</span> @endif</td>
		</tr>
	@endforeach
	
</table>

