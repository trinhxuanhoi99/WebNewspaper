@extends('layouts/master')

@section('NoiDung')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa Loại Tin</h1>
        </div>
        <div class="col-md-12">
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <form action="{{route('postSuaLT',$ReNameLT->idLoaiTin)}}" method="POST">
                {{csrf_field()}}
                <label>Remane Loại Tin</label>
                <input type="text" id="fname" name="ReNameLoaiTin" placeholder="Tên Thể Loại" value="{{$ReNameLT->TenLoaiTin}}">
                <button type="submit" class="button btn btn-home-newsletter " data-index="0">Sửa Loại Tin</button>
               
            </form>
        </div>
    </div>
</div>
@endsection