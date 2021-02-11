<table class="table table-striped">
	<tr>
		<th width=20%>Tedavi</th>
		<th width=20%>Konu</th>
		<th >Yorum</th>
		<th>Yıldız</th>
		<th>Durum</th>
		<th>Kaldır</th>
	</tr>
	@foreach ($review as $v)
	<tr>
		<td>{{$v->tedavi->title}}</td>
		<td>{{$v->subject}}</td>
		<td>{{$v->review}}</td>
		<td>
			<div class="starrating ">
				<input type="radio" id="star5" @if($v->rate == 5) checked @endif name="rating{{$v->id}}" value="5" />
				<label for="" title="5 star"></label>
				<input type="radio" id="star4" @if($v->rate == 4) checked @endif  name="rating{{$v->id}}" value="4" />
				<label for="" title="4 star"></label>
				<input type="radio" id="star3" @if($v->rate == 3) checked @endif name="rating{{$v->id}}" value="3" />
				<label for="" title="3 star"></label>
				<input type="radio" id="star2" @if ($v->rate == 2) checked @endif name="rating{{$v->id}}" value="2" />
				<label for="" title="2 star"></label>
				<input type="radio" id="star1" @if ($v->rate == 1) checked @endif name="rating{{$v->id}}" value="1" />
				<label for="" title="1 star"></label>
			</div>

		</td>
		<td>@if ($v->status == "0") <span class="text-danger">Onaylanmadı</span> @else <span class="text-success">Onaylandı</span> @endif</td>
		<td>
            <a href='{{Route("profile_review_delete",$v->id)}}' class="btn btn-danger" data-toggle="tooltip" title="Kaldır">X</a>
        </td>
	</tr>
	@endforeach

</table>

