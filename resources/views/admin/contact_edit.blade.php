@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> Mesaj Detayları</h4>
				</div>
				<div class="card-body">
					@include('includes.message')
					<form action="{{route("admin_contact_update",$message->id)}}" method="POST">
					@csrf
					<div class="table-responsive">
						<table class="table table-striped">
							<tr>
								<td class="text-primary">İSİM</td>
								<td>{{$message->name}}</td>
							</tr>	
							<tr>
								<td class="text-primary">EMAİL</td>
								<td>{{$message->email}}</td>
							</tr>	
							<tr>
								<td class="text-primary">TELEFON</td>
								<td>{{$message->phone}}</td>
							</tr>	
							<tr>
								<td class="text-primary">İP</td>
								<td>{{$message->ip}}</td>
							</tr>	
							<tr>
								<td class="text-primary">KONU</td>
								<td>{{$message->subject}}</td>
							</tr>
							<tr>
								<td class="text-primary">MESAJ</td>
								<td>{{$message->message}}</td>
							</tr>
							<tr>
								<td class="text-primary">ADMİN NOTE</td>
								<td>
									<textarea name='note' class="form-control">{{$message->note}}</textarea></td>
							</tr>
							<tr>
								<td ><input type="submit" class="btn btn-success" value="KAYDET"></td>
								<td></td>
							</tr>
						</table>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	.navbar {
		display:none
	}
	.main-panel > .content {
		margin-top: 10px;
	}
</style>

@stop