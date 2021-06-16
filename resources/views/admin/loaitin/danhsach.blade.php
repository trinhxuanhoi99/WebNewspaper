@extends('layouts/master')

@section('NoiDung')

<div class="container">
    <div class="flex-container">

        <!-- product-list -->
        <div class="product-listing">
            <div class="items">
                <div class="row">
                    <div class="col-md-12">
                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <h1>Danh sách Loại Tin</h1>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>IdLoaiTin</th>
                                <th>idTheLoai</th>
                                <th>TenLoaiTin</th>
                                <th>delete</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($loaitin as $row)
                            <tr>
                                <td>{{$row->idLoaiTin}}</td>
                                <td>{{$row->idTheLoai}}</td>
                                <td>{{$row->TenLoaiTin}}</td>
                                <td><i class="fa fa-trash"></i><a href="admin/loaitin/xoa/{{$row->idLoaiTin}}">Delete</a></td>
                                <td><i class="fa fa-pencil" aria-hidden="true"></i><a href="admin/loaitin/getSua/{{$row->idLoaiTin}}">Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </div>
            </div>

        </div>
        <!-- end product-list -->
    </div>
    <!-- list page -->

    <!-- end list page -->
</div>

@endsection