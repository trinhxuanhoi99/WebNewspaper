@extends('layouts/master')

@section('NoiDung')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Thêm thể loại</h1>
        </div>
        <div class="col-md-12">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>,
                @endforeach
            </div>
            @endif

            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif

            <form action="{{route('postThemTL')}}" method="POST">
                {{csrf_field()}}
                <label>Mã Thể Loại</label>
                <input type="text" id="fname" name="idTheLoai" placeholder="Mã Thể Loại">
                <label>Tên Thể Loại</label>
                <input type="text" id="fname" name="TenTheLoai" placeholder="Tên Thể Loại">
                <button type="submit" class="button btn btn-home-newsletter " data-index="0">Thêm Thể loại</button>
                <button type="reset" class="button btn btn-home-newsletter" data-index="0">Reset</button>
            </form>
        </div>
        </div>
    </div>

    @endsection