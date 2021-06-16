<?php

namespace App\Http\Controllers;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Models\LoaiTin;
use App\Models\TheLoai;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
class loaitincontroller extends Controller
{
    public function getDS(){
        $loaitin = LoaiTin::get();
        return view('admin.loaitin.danhsach',['loaitin'=>$loaitin]);
    }

    public function getThem(){
        $theloai=TheLoai::all();
        return view('admin.loaitin.them',['TL'=>$theloai]);
    }
    public function postThem(Request $request){
        
        $this->validate($request,[
            'TenLT'=>'required|min:3|max:100',
            'idLT'=>'required|min:2|max:10||unique:loaitin,idLoaiTin',
            'TheLoai'=>'required'
        ],
        [
            'TenLT.required'=>'Bạn chưa nhập tên loại tin',
            'TenLT.min'=>'Tên loại tin phải có độ dài từ 3-100 kí tự',
            'TenLT.max'=>'Tên loại tin phải có độ dài từ 3-100 kí tự',
            'idLT.required'=>'Bạn chưa nhập id loại tin',
            'idLT.min'=>'Mã loại tin phải có độ dài từ 2-10 kí tự',
            'idLT.max'=>'Mã loại tin phải có độ dài từ 2-10 kí tự',
            'idLT.unique:loaitin'=>'Mã phải duy nhất',
        ]);

        $LoaiTin =new LoaiTin;
        $LoaiTin->TenLoaiTin=$request->TenLT;
        $LoaiTin->idLoaiTin=$request->idLT;
        $LoaiTin->idTheLoai=$request->TheLoai;
        $LoaiTin->save();
        return redirect()->route('getThemLT')->with('thongbao','thêm thành công');
        
    }
    public function getSua($idLoaiTin){
        // $LoaiTin =DB::table('LoaiTin')->where('idLoaiTin',$idLoaiTin)->value('TenLoaiTin');
        $LoaiTin=LoaiTin::find($idLoaiTin);
       
        return view('admin.loaitin.sua',['ReNameLT'=>$LoaiTin]);
        
    }
    public function postSua(Request $request,$idLT){
     $LoaiTin=LoaiTin::find($idLT);
     $LoaiTin->TenLoaiTin= $request->ReNameLoaiTin;
     $LoaiTin->save();
     return redirect()->route('getDanhSachLT')->with('thongbao','sửa thành công');
    }

    public function getXoa($id){
        $loaitin=LoaiTin::find($id);
        $loaitin->delete();
        return redirect()->route('getDanhSachLT')->with('thongbao','Xóa Thành Công');
    }
}
