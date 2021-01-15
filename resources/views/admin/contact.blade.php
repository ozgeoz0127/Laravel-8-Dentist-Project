@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> İletişim Mesajları</h4>
					@include('includes.message')
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
										email
									</th>
									<th>
										Telefon
									</th>
									<th>
										Konu
									</th>
									<th>
										Mesaj
									</th>
									<th>
										Admin Note
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
								@foreach ($message as $k=>$v)

								<tr>
									<td>
										{{$v->name}}
									</td>
									<td>
										{{$v->email}}
									</td>
									<td>
										{{$v->phone}}
									</td>
									<td>
										{{$v->subject}}
									</td>
									<td>
										{{$v->message}}
									</td>
									<td>
										{{$v->note}}
									</td>
									<td>
										{{($v->status == 1 ? "Okundu" : "Yeni")}}
									</td>
									<td class="text-right">
										<a href="javascript:;" onclick="myPopup('{{Route("admin_contact_edit",$v->id)}}', '',750,550);"  data-toggle="tooltip" class="btn btn-success btn-icon btn-sm "  title="Düzenle">
											<i class="fa fa-edit"></i>
										</a>
										<a href='{{Route("admin_contact_delete",$v->id)}}'" data-toggle="tooltip" class="btndelete btn btn-danger btn-icon btn-sm "  title="Kaldır">
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