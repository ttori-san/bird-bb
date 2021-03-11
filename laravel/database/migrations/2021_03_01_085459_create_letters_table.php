<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letters', function (Blueprint $table) 
        {
            $table->bigIncrements('id');//投稿識別ID
			$table->string("file_path")->nullable();//画像ファイルパス
            $table->string("file_name")
            ->nullable();//画像ファイル名
            $table->text('name');//鳥種
            $table->text('place');
            $table->text('comment')->nullable();
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');//投稿者のID（user_id）はusersテーブルにあるidからしか入れられないようにした
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
        Schema::dropIfExists('letters');
    }
}
