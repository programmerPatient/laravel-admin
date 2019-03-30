<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->string('state')->nullable();//国家
            $table->string('province')->nullable();//省份
            $table->string('city')->nullable();//城市
            $table->string('county')->nullable();//县城m
            $table->string('village')->nullable();//乡或镇
            $table->string('detail')->nullable();//详细地址
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
        Schema::dropIfExists('locations');
    }
}
