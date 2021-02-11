<table class="table table-striped">
	<tr>
		<th width=20%>Randevu Tarihi</th>
		<th width=20%>Doktor</th>
		<th>Tedavi</th>
		<th>Durum</th>
		<th>Kaldır</th>
	</tr>
	@foreach ($appointment as $v)
	<tr>
		<td>{{$v->date ." ". $v->time}}</td>
		<td>{{$v->user->name." ".$v->user->surname}}</td>
		<td>{{$v->tedavi->title}}</td>
		<td>@if ($v->status == "0")
			<span class="text-danger">Onay bekliyor</span> @else
			<span class="text-success">Onaylandı</span> @endif</td>
		<td>
            <a href='{{Route("profile_appointment_delete",$v->id)}}' class="btn btn-danger" data-toggle="tooltip" title="Kaldır">X</a>

        </td>
	</tr>
	@endforeach

</table>
