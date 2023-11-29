<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagerlistTable extends Migration
{
    public function up()
    {
        Schema::create('managerlist', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('account');
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('managerlist');
    }
}
