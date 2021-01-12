@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> Kullanıcı Yorumları</h4>
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


							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop