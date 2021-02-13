@extends('admin.layouts.default')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Kullanıcı Edit</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{Route("admin_user_store")}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>İsim</label>
                                <input type="text" value="" name="name" placeholder="isim" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Soyisim</label>
                                <input type="text" value="" required name="surname" placeholder="soyisim" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="text" value="" required name="email" placeholder="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Şifre</label>
                                <input type="password" value="" required name="password" placeholder="Şifre" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Telefon</label>
                                <input type="text" value="" required name="phone" placeholder="telefon" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Adres</label>
                                <input type="text" value="" required name="address" placeholder="adres" class="form-control">
                            </div>
                            <div class=" col-md-3 col-xs-6">
                                <label class="control-label">Profile Foto</label>
                                <input type="file" class="form-control" name="image" accept="image/x-png,image/gif,image/jpeg">
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="width:100%">Kullanıcı Durumu</label>
                                <label >
                                    <input type="radio" name="status" value="1"  > Onayla
                                </label>
                                <label >
                                    <input type="radio" name="status"  value="0"> Onaylama
                                </label>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Güncelle" class="btn btn-success">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
