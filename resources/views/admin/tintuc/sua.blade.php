@extends('layouts/master')

@section('NoiDung')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Sửa Tin Tức</h1>
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

            <form action="{{route('postSuaTT',$tintuc->id)}}" method="POST">
                {{csrf_field()}}
                <label>Tiêu đề</label>
                <input type="text" id="fname" name="TieuDe" placeholder="Tiêu đề" value="{{$tintuc->TieuDe}}">
                <label>Nội Dung Tóm Tắt</label>
                <textarea class="form-control" rows="3" name="TomTat" placeholder="Tóm Tắt" >{{$tintuc->TomTat}}</textarea>
                <label>Nội Dung</label>
                <textarea class="form-control" name="NoiDung" id="" rows="3" placeholder="Nội Dung">{{$tintuc->NoiDung}}</textarea>
                <label>Thể Loại</label>
                <select id="idTheLoai" name="TheLoai" onchange="getTypeNews(this)">
                    @foreach($TL as $row)
                    <option value="{{$row->idTheLoai}}">{{$row->TenTheLoai}}</option>
                    @endforeach
                </select>
                <label>Loại Tin</label>
                <select id="idLoaiTin" name="LoaiTin">
                    @foreach($LT as $row)
                    <option value="{{$row->idLoaiTin}}">{{$row->TenLoaiTin}}</option>
                    @endforeach
                </select>
                <button type="submit" class="button btn btn-home-newsletter " data-index="0">Sửa</button>
                <button type="reset" class="button btn btn-home-newsletter" data-index="0">Reset</button>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
   
    function getTypeNews(event){
        const id = event.value;
        $.ajax({
            url: `{{route('abc','')}}/${id}`,
            method: 'GET',
            success: (data) => {
                let html ='';
                data.forEach(element => {
                    html += `<option value="${element.idLoaiTin}">${element.TenLoaiTin}</option>`; 
                });
                $("#idLoaiTin").html(html)
            },
            error: (err) => {
                console.log('err',err)

            }
        })
    }
</script>
@endsection