<?php

namespace App\Http\Controllers;

use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Models\TheLoai;
use App\Models\TinTuc;
use App\Models\LoaiTin;
use Egulias\EmailValidator\Warning\TLD;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\application\json;
use Illuminate\Http\Response;
class tintuccontroller extends Controller
{
    public function getDS()
    {
        $tintuc = TinTuc::get();
        return view('admin.tintuc.danhsach', ['tintuc' => $tintuc]);
    }

    public function getThem()
    {
        $theloai = TheLoai::all();
        $loaitin = LoaiTin::all();
        return view('admin.tintuc.them', ['TL' => $theloai, 'LT' => $loaitin]);
    }
    public function postThem(Request $request)
    {
        
        $this->validate(
            $request,
            [
                'TieuDe' => 'required|min:3|max:100',
                'NoiDung' => 'required|min:2',
                'TomTat' => 'required|min:2'
            ],
            [
                'TieuDe.required' => 'Bạn chưa nhập tiêu đề',
                'TieuDe.min' => 'Tiêu đề phải có độ dài từ 3-100 kí tự',
                'TieuDe.max' => 'Tiêu đề phải có độ dài từ 3-100 kí tự',
                'NoiDung.required' => 'Bạn chưa nhập Nội Dung',
                'NoiDung.min' => 'Nội dung phải có độ dài từ 2 kí tự',
               
                'TomTat.required' => 'Bạn chưa nhập Tóm Tắt',
                'TomTat.min' => 'Tóm Tắt nội dung phải có độ dài từ 2kí tự',
       
                
            ]
        );

        $tintuc = TinTuc::create([
            'TieuDe' => $request->input('TieuDe'),
            'TomTat' => $request->input('TomTat'),
            'NoiDung' => $request->input('NoiDung'),
            'idLoaiTin' => $request->input('LoaiTin'),
        ]);
       
        return redirect()->route('getDanhSachTT')->with('thongbao','thêm thành công');
    }
    public function getSua($idtt)
    {
        $tintuc = TinTuc::find($idtt);
        $theloai = TheLoai::all();
        $loaitin = LoaiTin::all();
        return view('admin.tintuc.sua', ['tintuc' => $tintuc,'TL'=>$theloai,'LT'=>$loaitin]);
    }
    public function postSua(Request $request, $idTL)
    {
        $tintuc = TinTuc::find($idTL);
        $tintuc->TieuDe = $request->TieuDe;
        $tintuc->TomTat=$request->TomTat;
        $tintuc->NoiDung=$request->NoiDung;
        $tintuc->idLoaiTin=$request->LoaiTin;
        $tintuc->save();
        return redirect()->route('getDanhSachTT')->with('thongbao', 'sửa thành công');
    }

    public function getXoa($id)
    {
        $tintuc = TinTuc::find($id);
        $tintuc->delete();
        return redirect()->route('getDanhSachTT')->with('thongbao', 'Xóa Thành Công');
    }

    public function getTypeNews($id, Request $request)
    {
        if ($request->ajax()) {
            $theloai = TheLoai::findOrFail($id);
            return $theloai->loaitin()->get();
        }
       
    }
}
