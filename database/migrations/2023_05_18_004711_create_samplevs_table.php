<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamplevsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samplevs', function (Blueprint $table) {
            $table->id();
            $table->string('tweet');
            $table->string('title');
            $table->timestamps();
        });
    }
//laravelでテーブルを作るための全体像
//1,マイグレーションファイルを作成。
//2,カラムを定義する。
//3,コマンドの入力。（php artisan migrate）

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('samplevs');
    }
}
