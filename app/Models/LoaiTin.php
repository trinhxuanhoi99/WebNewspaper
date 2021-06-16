<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeUnit\FunctionUnit;

class LoaiTin extends Model
{
    use HasFactory;
    protected $table ="loaitin";
    protected $primaryKey ='idLoaiTin';
    protected $keyType = 'string';
    protected $fillable = [
        'TenLoaiTin',
        'idTheLoai',
        'idLoaiTin',
    ];
    public function theloai(){
        return $this->belongsTo('App\models\TheLoai','idTheLoai','idTheLoai');
    }

    public function tintuc(){
        return $this->hasMany('App\models\tintuc','idLoaiTin','idLoaiTin');
    }
}
