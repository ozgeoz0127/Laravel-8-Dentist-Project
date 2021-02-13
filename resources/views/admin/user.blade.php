@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> Kullanıcılar</h4>
                    <a href='{{Route('admin_user_create')}}' clasS="btn btn-success "> + Yeni Ekle</a>
                </div>
				<div class="card-body">
                    @include('includes.message')

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
                                    <th>
                                        Durum
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
										{{$v->roles->pluck("name")}}
                                        <a href="javascript:;" onclick="myPopup('{{Route("admin_user_roles",$v->id)}}', '',750,550);" data-toggle="tooltip" title="Rol Ekle">
                                            <i class="fa fa-plus-square"></i>
                                        </a>
									</td>
                                    <td>
                                        @if ($v->status == 0) Onaylanmadı @else Onaylandı @endif
                                    </td>
									<td class="text-right">
                                        <a href="{{Route("admin_user_edit",$v->id)}}" data-toggle="tooltip" class="btn btn-warning btn-icon btn-sm "  title="Düzenle">
                                            <i class="fa fa-edit"></i>
                                        </a>
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

<script>
    function myPopup(myURL, title, myWidth, myHeight)
    {
        var left = (screen.width - myWidth) / 2;
        var top = (screen.height - myHeight) / 4;
        var myWindow = window.open(myURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + myWidth + ', height=' + myHeight + ', top=' + top + ', left=' + left);
    }
</script>

@stop
