@extends('layouts/master')

@section('NoiDung')
    <div class="flex-container">

        <!-- product-list -->
        <div class="product-listing">
            <div class="items">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('thongbao'))
                            <div class="alert alert-success">
                                {{ session('thongbao') }}
                            </div>
                        @endif
                    </div>
                    @foreach ($tintuc as $row)
                        <div class="col-md-3" style="margin-top:20px">
                            <div class="image">
                                <img class="lazy" style="display: inline;" src="img/img-product/bao.jpg">
                            </div>
                            <div class="title">
                               <b>{{ $row->TieuDe }}</b>
                            </div>
                            <div class="price-sale" style="text-align: center">
                                {{ $row->TomTat }}
                            </div>
                                <div class="row">
                                     <div class="col-md-6 text-center">
                                    <a href="{{route('getSuaTT',$row->id)}}">Sửa</a>
                                   
                                </div>
                                <div class="col-md-6 text-center">
                                    <a href="{{route('getSuaTT',$row->id)}}">Xóa</a>
                                   
                                </div>
                                </div>
                               
                            
                        </div>

                    @endforeach
                </div>
            </div>

        </div>
        <!-- end product-list -->
    </div>
    <!-- list page -->

    <!-- end list page -->
    </div>

@endsection
