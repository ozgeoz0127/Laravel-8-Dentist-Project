@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> Kullanıcılar</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead class=" text-primary">
								<tr>
									<th>
										İsim
									</th>
									<th>
										Email
									</th>
									<th>
										Rol
									</th>
									<th class="text-right">
										İşlem
									</th>
								</tr>
							</thead>
							<tbody>

								@foreach ($users as $k=>$v)

								<tr>
									<td>
										{{$v->name." ".$v->surname}}
									</td>
									<td>
										{{$v->email}}
									</td>
									<td>
										{{$v->role}}
									</td>
									<td class="text-right">
                                        <a href="{{Route("admin_user_delete",$v->id)}}" data-toggle="tooltip" class="btn btn-danger btn-icon btn-sm "  title="Kaldır">
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
