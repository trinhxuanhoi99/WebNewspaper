@extends('layouts/master')

@section('NoiDung')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa thể loại</h1>
        </div>
        <div class="col-md-12">
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <form action="{{route('postSuaTL',$ReNameTL->idTheLoai)}}" method="POST">
                {{csrf_field()}}
                <label>Remane Thể Loại</label>
                <input type="text" id="fname" name="ReNameTheLoai" placeholder="Tên Thể Loại" value="{{$ReNameTL->TenTheLoai}}">
                <button type="submit" class="button btn btn-home-newsletter " data-index="0">Sửa Thể Loại</button>
                <button type="reset" class="button btn btn-home-newsletter" data-index="0">Reset</button>
            </form>
        </div>
    </div>
</div>
@endsection