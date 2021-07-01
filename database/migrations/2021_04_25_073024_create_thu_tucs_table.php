<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThuTucsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thu_tucs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mathutuc');
            $table->string('tenthutuc');
            $table->string('mota');
            $table->foreignId('id_linhvuc')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->string('trinhtu');
            $table->bigInteger('cap_thuc_hien_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('thu_tucs');
    }
}
