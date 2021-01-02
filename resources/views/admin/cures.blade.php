@extends('admin.layouts.default')
@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title"> Tedaviler</h4>
					<button clasS="btn btn-success addnew"> + Yeni Ekle</button>
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
										{{($v->status == 1 ? "Yayında" : "Yayında Değil")}}
									</td>
									<td class="text-right">
										<button type="button" rel="{{$v->id}}"  data-toggle="tooltip" class="btnedit btn btn-success btn-icon btn-sm "  title="Düzenle">
											<i class="fa fa-edit"></i>
										</button>
										<button onclick="window.location.href='{{url("admin/cures/delete/".$v->id)}}'" type="button" data-toggle="tooltip" class="btndelete btn btn-danger btn-icon btn-sm "  title="Kaldır">
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

<script>
	$(function(){
		$(".addnew").click(function(){
			modal = $("#editmodal");
			$("#curesform")[0].reset();
			$('#detail').summernote('code', "");	
			modal.modal();	
		});
		$('#detail').summernote();
		$(".btnedit").click(function(){
			modal = $("#editmodal");
			modal.find(".load").html("<span class='text-success'><b>Bekleyiniz...</b></span>");
			modal.modal();	
			
			$.ajax({
				method: "POST",
				url: $("#curesform").attr("action")+"/getdata",
				data: {tedaviID : $(this).attr("rel")}
			}).done(function(c) {
				modal.find(".load").html("");
				$.each(c[0],function(k,v){
					if (k == "status") {
						modal.find("input[name='status'][value='"+v+"']").prop("checked",true);
						return;
					}
					modal.find("[name='"+k+"']").val(v)	;
					if (k == "detail") {
						$('#detail').summernote('code', v);	
					}

				});
				
			});
			
		});	
		
		$(".saveform").click(function(){
			modal 	= $("#editmodal");
			load	= modal.find(".load");
			load.html("<span class='text-success'><b>Bekleyiniz...</b></span>");
			formdata = $("#curesform").serialize();
			$.ajax({
				method: "POST",
				url: $("#curesform").attr("action")+"/save",
				data: formdata
			}).done(function(c) {
				if (c.status) {
					load.html("<span class='text-success'><b>Başarı ile kaydedildi</b></span>");
					setTimeout(function() {
						location.reload(false);
					} ,1500);
				}else {
					load.html("<span class='text-danger'><b>Hata Oluştu</b></span>");
				}

			});
		});
		
		$("[name='title']").keyup(function(){
			$("[name='url']").val(SURL($(this).val()));
		});
		
		function SURL (link)
		{
			var trMap = {
				'çÇ':'c',
				'ğĞ':'g',
				'şŞ':'s',
				'üÜ':'u',
				'ıİ':'i',
				'öÖ':'o'
			};

			for (var key in trMap) {
				link = link.replace(new RegExp('['+key+']','g'), trMap[key]);
			}
			return  link.replace(/[^-a-zA-Z0-9\s]+/ig, '')
			.replace(/\s/gi, "-")
			.replace(/[-]+/gi, "-")
			.toLowerCase();
		}

	});
</script>

<div class="modal fade" data-backdrop="static" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tedavi Ekle / Düzenle</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{url("admin/cures")}}" id="curesform" method="POST">
					<div class="form-group">
						<label>Title</label>
						<input type="hidden" name="id" value="0">
						<input type="text" name="title" placeholder="title" class="form-control">
					</div>
					<div class="form-group">
						<label>Keywords</label>
						<input type="text" name="keywords" placeholder="keywords" class="form-control">
					</div>
					<div class="form-group">
						<label>Description</label>
						<input type="text" name="description" placeholder="description" class="form-control">
					</div>
					<div class="form-group">
						<label>İcon</label>
						<input type="text" name="image" placeholder="icon" class="form-control">
					</div>
					<div class="form-group">
						<label>Detail</label>
						<textarea name="detail" id="detail" placeholder="detail" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<label>url</label>
						<input type="text" name="url" readonly="" placeholder="url" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" style="width:100%">Yayın Durumu</label>
						<label >
							<input type="radio" name="status" value="1"> Aktif
						</label>
						<label >
							<input type="radio" name="status"  value="0"> Pasif
						</label>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<div clasS="load col-md-7 col-xs-12"></div>
				<div clasS="col-md-4 col-xs-12" style="text-align:right">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
					<button type="button" class="saveform btn btn-primary">Kaydet</button>
				</div>
			</div>
		</div>
	</div>
</div>

@stop