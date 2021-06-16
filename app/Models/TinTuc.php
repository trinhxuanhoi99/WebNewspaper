<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    use HasFactory;
    protected $table ="tintuc";
    protected $fillable = [
        'TieuDe',
        'TomTat',
        'NoiDung',
        'idLoaiTin',
    ];
    public function loaitin(){
        return $this->belongsTo('App\models\LoaiTin','idLoaiTin','idLoaiTin');
    }
    
}
