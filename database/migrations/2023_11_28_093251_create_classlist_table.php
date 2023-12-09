<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasslistTable extends Migration
{
    public function up()
    {
        Schema::create('classlist', function (Blueprint $table) {
            $table->id();
            $table->string('classtype')->default('一般課程');
            $table->string('link'); // 存儲YouTube影片連結
            $table->unsignedBigInteger('teacherid');
            $table->string('teachername');
            $table->time('videotime');
            $table->text('introduction');
            $table->string('photo'); // 存儲本機圖片連結
            $table->string('know');
            $table->string('forwho');
            $table->string('money');
            $table->string('classname'); // 新增 classname 欄位
            $table->timestamps();

            $table->foreign('teacherid')->references('id')->on('userlist')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('classlist');
    }
}
