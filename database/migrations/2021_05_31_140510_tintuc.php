<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tintuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tintuc',function($table){
            $table->increments('id');
            $table->string('idLoaiTin');
            $table->string('TieuDe');
            $table->text('TomTat');
            $table->text('NoiDung');
            $table->foreign('idLoaiTin')->references('idLoaiTin')->on('LoaiTin');
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
        Schema::dropIfExists('TinTuc');
       
    }
}
