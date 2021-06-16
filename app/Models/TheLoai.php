<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
class TheLoai extends Model
{
    use HasFactory;
    protected $table ="theloai";
    protected $primaryKey ='idTheLoai';
    protected $keyType = 'string';
    protected $fillable = [
        'idTheLoai',
        'TenTheLoai',
    ];
    public function loaitin(){
        return $this->hasMany('App\models\loaitin','idTheLoai','idTheLoai');
    }

    public function tintuc(){
        return $this->hasManyThrough('App\models\TinTuc','App\models\LoaiTin','idTheLoai','idLoaiTin','idTheLoai');
    }
}
