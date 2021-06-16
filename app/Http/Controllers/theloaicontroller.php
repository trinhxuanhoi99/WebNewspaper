<?php

namespace App\Http\Controllers;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Models\TheLoai;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
class theloaicontroller extends Controller
{
    public function getDS(){
        $theloai = TheLoai::all();
        return view('admin.theloai.danhsach',['theloai'=>$theloai]);
    }

    public function getThem(){
     
        return view('admin.theloai.them');
    }
    public function postThem(Request $request){
        $this->validate($request,[
            'TenTheLoai'=>'required|min:3|max:100',
            'idTheLoai'=>'required|unique:theloai,idTheLoai|min:2|max:10'
        ],
        [
            'TenTheLoai.required'=>'Bạn chưa nhập tên thể loại',
            'TenTheLoai.min'=>'Tên thể loại phải có độ dài từ 3-100 kí tự',
            'TenTheLoai.max'=>'Tên thể loại phải có độ dài từ 3-100 kí tự',
            'idTheLoai.required'=>'Bạn chưa nhập id thể loại',
            'idTheLoai.min'=>'Mã thể loại phải có độ dài từ 2-10 kí tự',
            'idTheLoai.max'=>'Mã thể loại phải có độ dài từ 2-10 kí tự',
            'idTheLoai.unique:theloai'=>'Mã phải duy nhất',
        ]);

        $theloai =new TheLoai;
        $theloai->TenTheLoai=$request->TenTheLoai;
        $theloai->idTheLoai=$request->idTheLoai;
        $theloai->save();
        return redirect()->route('getThem')->with('thongbao','thêm thành công');
        
    }
    public function getSua($idTheLoai){
        // $theloai =DB::table('theloai')->where('idTheLoai',$idTheLoai)->value('TenTheLoai');
        $theloai=TheLoai::find($idTheLoai);
       
        return view('admin.theloai.sua',['ReNameTL'=>$theloai]);
        
    }
    public function postSua(Request $request,$idTL){
     $theloai=TheLoai::find($idTL);
     $theloai->TenTheLoai= $request->ReNameTheLoai;
     $theloai->save();
     return redirect()->route('getDanhSachTL')->with('thongbao','sửa thành công');
    }

    public function getXoa($id){
        $theloai=TheLoai::find($id);
        $theloai->delete();
        return redirect()->route('getDanhSachTL')->with('thongbao','Xóa Thành Công');
    }

  
}
