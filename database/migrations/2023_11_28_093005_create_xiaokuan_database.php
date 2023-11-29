// database/migrations/YYYY_MM_DD_create_xiaokuan_database.php

<?php



use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXiaokuanDatabase extends Migration
{
    public function up()
    {
        // 指定要創建的資料庫名稱
        Schema::create('xiaokuan', function (Blueprint $table) {
            $table->id();
            // 其他資料表列定義...
            $table->timestamps();
        });
    }

    public function down()
    {
        // 定義當運行 `php artisan migrate:rollback` 時要執行的邏輯
        Schema::dropIfExists('xiaokuan');
    }
}
