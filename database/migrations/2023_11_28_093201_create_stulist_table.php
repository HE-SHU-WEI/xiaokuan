<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStulistTable extends Migration
{
    public function up()
    {
        Schema::create('stulist', function (Blueprint $table) {
            $table->id();
            $table->string('account');
            $table->string('password');
            $table->string('name');
            $table->string('school');
            $table->string('grade');
            $table->string('gmail');
            $table->string('stuaddress1');
            $table->string('stuaddress2');
            $table->string('stuaddress3');
            $table->string('parname');
            $table->string('pargmail');
            $table->string('parnumber');
            $table->string('Howtoknow');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stulist');
    }
}
