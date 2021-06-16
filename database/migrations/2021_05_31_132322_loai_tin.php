<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoaiTin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LoaiTin',function($table){
            $table->string('idLoaiTin');
            $table->primary('idLoaiTin');
            $table->string('idTheLoai');
            $table->string('TenLoaiTin');
            $table->foreign('idTheLoai')->references('idTheLoai')->on('TheLoai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LoaiTin');
       
    }
}
