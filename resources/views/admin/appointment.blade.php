@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> Randevular</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead class=" text-primary">
								<tr>
									<th>
										Kullanıcı
									</th>
									<th>
										Tedavi
									</th>
									<th>
										Tarih/Saat
									</th>
									<th>
										Doktor
									</th>
									<th>
										Durum
									</th>
									<th class="text-right">
										İşlem
									</th>
								</tr>
							</thead>
							<tbody>

								@foreach ($appointment as $k=>$v)

								<tr>
									<td>
										{{$v->username}}
									</td>
									<td>
										{{$settings["cures"][$v->tedavi_id]["name"]}}
									</td>
									<td>
										{{$v->date." ".$v->time}}
									</td>
									<td>
										{{$settings["doctors"][$v->hekim_id]["name"]." ".$settings["doctors"][$v->hekim_id]["surname"]}}
									</td>
									<td>
										@if($v->status == "0")
										<span class="text-danger">Onay Beleniyor</span> @else
										<span class="text-success">Onay Beleniyor</span> @endif
									</td>
									<td class="text-right">
										<button type="button" data-toggle="tooltip" data-placement="top" class="btn btn-success btn-icon btn-sm " title="Onayla">
											<i class="fa fa-check-square-o"></i>
										</button>
										<button type="button" data-toggle="tooltip" data-placement="top" class="btn btn-danger btn-icon btn-sm "  title="Kaldır">
											<i class="fa fa-times"></i>
										</button>
									</td>
								</tr>

								@endforeach

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop