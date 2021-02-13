@extends('admin.layouts.default')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Role Detayları</h4>
                    </div>
                    <div class="card-body">
                        @include('includes.message')
                        <form action="{{route("admin_user_role_add",$data->id)}}" method="POST">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <td class="text-primary">İD</td>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">KULLANICI</td>
                                        <td>{{$data->name." ".$data->surname}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">EMAİL</td>
                                        <td>{{$data->email}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">ROL</td>
                                        <td>
                                            @foreach ($data->roles as $rs)
                                                <span> {{$rs->name}} <a href="{{route("admin_user_role_delete",["userid" => $data->id,"roleid" => $rs->id])}}"><i class="fa fa-times text-danger"></i></a></span>
                                            @endforeach

                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">ROL Ekle</td>
                                        <td>
                                            <select name="roleid">
                                                @foreach ($datalist as $rs)
                                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                @endforeach
                                            </select>
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
