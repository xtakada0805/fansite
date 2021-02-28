<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Initialize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('thumbnail_url')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cover_url')->nullable();
            $table->string('thumbnail_url')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('fan_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        //中間テーブル
        Schema::create('user_follow', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('follow_id');
            $table->timestamps();

            //外部キー制約
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('follow_id')->references('id')->on('users')->onDelete('cascade');

            //user_idとfollow_idの組み合わせの重複を許さない
            $table->unique(['user_id', 'follow_id']);
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_follow');
        Schema::dropIfExists('fans');
        Schema::dropIfExists('users');
    }
}
