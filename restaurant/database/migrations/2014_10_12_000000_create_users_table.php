<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->boolean('is_admin')->default(0);//0 means delivery boy 1 means admin
            $table->string('status')->nullable();//available/unavailable
            $table->string('user_status')->nullable();//block/verified/unverified
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('contact')->nullable();
            $table->string('device_token')->nullable();
            $table->string('permanent_address')->nullable();
            //$table->enum('role',['driver','admin','retaurant']);
            $table->boolean('is_machine_accept')->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
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
