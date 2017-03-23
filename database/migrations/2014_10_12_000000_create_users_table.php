<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('用户名');
            $table->string('email')->unique()->comment('电子邮箱');
            $table->string('phone')->unique()->nullable()->comment('手机号码');
            $table->string('avatar')->nullable()->comment('头像');
            $table->tinyInteger('sex')->default(0)->comment('性别,0:保密,1:男,2:女');
            $table->string('city')->nullable()->comment('居住城市');
            $table->string('intro')->nullable()->comment('个人简介');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
