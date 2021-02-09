@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> İnceleme Detayları</h4>
				</div>
				<div class="card-body">
					@include('includes.message')
					<form action="{{route("admin_review_update",$message->id)}}" method="POST">
					@csrf
					<div class="table-responsive">
						<table class="table table-striped">
							<tr>
								<td class="text-primary">KULLANICI</td>
								<td>{{$message->user->name." ".$message->user->surname}}</td>
							</tr>
							<tr>
								<td class="text-primary">TEDAVİ</td>
								<td>{{$message->tedavi->title}}</td>
							</tr>
							<tr>
								<td class="text-primary">TARİH/SAAT</td>
								<td>{{$message->created_at}}</td>
							</tr>
							<tr>
								<td class="text-primary">İP</td>
								<td>{{$message->ip}}</td>
							</tr>
                            <tr>
                                <td class="text-primary">YILDIZ</td>
                                <td>{{$message->rate}}</td>
                            </tr>
							<tr>
								<td class="text-primary">YILDIZ</td>
								<td>{{$message->subject}}</td>
							</tr>
							<tr>
								<td class="text-primary">MESAJ</td>
								<td>{{$message->review}}</td>
							</tr>
                            <tr>
                                <td colspan="2">
                                    <div class="form-group">
                                        <label class="control-label" style="width:100%">Yayın Durumu</label>
                                        <label >
                                            <input type="radio" name="status" value="1" @if ($message->status == 1) checked @endif > Yayınlansın
                                        </label>
                                        <label >
                                            <input type="radio" name="status"  value="0" @if ($message->status == 0) checked @endif> Yayınlanmasın
                                        </label>
                                    </div>
                                </td>
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
