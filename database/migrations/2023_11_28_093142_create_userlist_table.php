<?php

// database/migrations/YYYY_MM_DD_create_userlist_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserlistTable extends Migration
{
    public function up()
    {
        Schema::create('userlist', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('account');
            $table->string('password');
            $table->text('introduction');
            $table->text('background');
            $table->string('photo'); // 存儲本機圖片連結
            $table->timestamp('entry')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('userlist');
    }
}
