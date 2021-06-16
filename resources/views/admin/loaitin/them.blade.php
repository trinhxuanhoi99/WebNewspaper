@extends('layouts/master')

@section('NoiDung')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Thêm Loại Tin</h1>
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

            <form action="{{route('postThemLT')}}" method="POST">
                {{csrf_field()}}
                <label>Mã Loại Tin</label>
                <input type="text" id="fname" name="idLT" placeholder="Mã Loại Tin">
                <label>Tên Loại Tin</label>
                <input type="text" id="fname" name="TenLT" placeholder="Tên Loại Tin">
                <label>Thể Loại</label>
                <select id="idTheLoai" name="TheLoai">
                    @foreach($TL as $row)
                        <option value="{{$row->idTheLoai}}">{{$row->TenTheLoai}}</option>
                    @endforeach
                </select>
                <button type="submit" class="button btn btn-home-newsletter " data-index="0">Thêm Thể loại</button>
                <button type="reset" class="button btn btn-home-newsletter" data-index="0">Reset</button>
            </form>
        </div>
    </div>
</div>

@endsection