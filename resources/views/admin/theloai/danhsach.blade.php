@extends('layouts/master')

@section('NoiDung')
<!-- <a class="col-md-3 col-sm-6 col-6 deal-item" href="https://tiki.vn/so-tay-tu-vung-120-trang-7-6-x-13-mau-ngau-nhien-p6836987.html?spid=6836989&amp;src=deal-hot&amp;2hi=1" target="_blank" data-id="6836987" data-title="Sổ Tay Từ Vựng 120 Trang (7.6 x 13) - Mẫu Ngẫu Nhiên" data-brand="" data-price="10000" data-impresslistname="Deal Hot" data-impressposition="1">
    <div class="image">
        <div class="discount-badge">
            47%
        </div>
        <img class="lazy" style="display: inline;" src="img/img-product/so-tay-tu-vung.jpg">
    </div>
    <div class="title">
        <img class="icon-tikinow1" src="img/icon-body/tikiNow-icon.png" alt="">
        Sổ Tay Từ Vựng 120 Trang (7.6 x 13) - Mẫu Ngẫu Nhiên
    </div>
    <div class="price-sale">
        10.000 ₫
        <span class="price-regular">
            19.000 ₫
        </span>
    </div>
</a> -->


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
                        <h1>Danh sách thể loại</h1>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>IDTheLoai</th>
                                <th>Tên Thể Loại</th>
                                <th>Delete</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($theloai as $row)
                            <tr>
                                <td>{{$row->idTheLoai}}</td>
                                <td>{{$row->TenTheLoai}}</td>
                                <td><i class="fa fa-trash"></i><a href="admin/theloai/xoa/{{$row->idTheLoai}}">Delete</a></td>
                                <td><i class="fa fa-pencil" aria-hidden="true"></i><a href="admin/theloai/getSua/{{$row->idTheLoai}}">Sửa</a></td>
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