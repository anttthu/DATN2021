<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoSosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ho_sos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SoBienNhan');
            $table->string('TenNguoiNop');
            $table->string('DiaChi');
            $table->string('Email');
            $table->string('CMND_CCCD');
            $table->bigInteger('nguoicapnhat');
            $table->date('ngayhentra');
            $table->bigInteger('trangthaihoso_id');
            $table->string('ngayketthuc');
            $table->string('thoigianthuchien');
            $table->string('chuthich');

            $table->bigInteger('id_thutuc')->unsigned();
            $table->bigInteger('user_id')->unsigned();

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
        Schema::dropIfExists('ho_sos');
    }
}
