@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> Sık Sorulan Sorular</h4>
					<button class="btn btn-success addnew"> + Yeni Ekle</button>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead class=" text-primary">
								<tr>
									<th style="width:30%">
										Soru
									</th>
									<th style="width:50%">
										Cevap
									</th>
									<th style="width:10%">
										Durum
									</th>
									<th style="width:10%" class="text-right">
										İşlem
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($faq as $v)
								<tr>
									<td>
										{{$v->question}}
									</td>
									<td>
										{{$v->answer}}
									</td>
									<td>
										@if ($v->status == 1) Aktif  @else Pasif @endif
									</td>
									<td class="text-right">
										<button type="button" data-toggle="tooltip" class="btn btn-info btn-icon btn-sm "  title="Aktif/Pasif">
											<i class="fa fa-low-vision"></i>
										</button>
										<button type="button" data-toggle="tooltip" class="btn btn-warning btn-icon btn-sm "  title="Düzenle">
											<i class="fa fa-edit"></i>
										</button>
										<button type="button" data-toggle="tooltip" class="btn btn-danger btn-icon btn-sm "  title="Kaldır">
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