@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> Tedaviler</h4>
					<a href='{{Route('admin_cure_create')}}' clasS="btn btn-success "> + Yeni Ekle</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead class=" text-primary">
								<tr>
									<th>
										isim
									</th>
									<th>
										İcon
									</th>
									<th>
										Url
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
								@foreach ($cures as $k=>$v)

								<tr>
									<td>
										{{$v->title}}
									</td>
									<td>
										{{$v->image}}
									</td>
									<td>
										{{$v->url}}
									</td>
									<td>
										{{($v->status == 1 ? "Aktif" : "Pasif")}}
									</td>
									<td class="text-right">
										<a href='{{Route("admin_cure_edit",$v->id)}}'"  data-toggle="tooltip" class="btn btn-success btn-icon btn-sm "  title="Düzenle">
											<i class="fa fa-edit"></i>
										</a>
										<a href='{{Route("admin_cure_delete",$v->id)}}'" data-toggle="tooltip" class="btndelete btn btn-danger btn-icon btn-sm "  title="Kaldır">
											<i class="fa fa-times"></i>
										</a>
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