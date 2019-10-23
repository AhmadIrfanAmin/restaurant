<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name');
            $table->string('last_name')->nullable();
            $table->string('address');
            $table->string('appartment_no')->nullable();
            $table->string('buzzer')->nullable();
            $table->text('note')->nullable();
            $table->string('contact');
            $table->string('distance');
            $table->string('pickup_time');
            $table->string('status');
            $table->unsignedBigInteger('fk_zone_id');
            $table->integer('delivery_price');
            $table->integer('tip');
            $table->enum('tip_by',['customer','restaurant']);
            $table->enum('payment_method',['machine','cash by customer','cash at restaurant']);
            $table->integer('order_price');
            $table->unsignedBigInteger('fk_restaurant_id');
            $table->unsignedBigInteger('fk_assigned_driver_id')->nullable();
            $table->timestamps();
            $table->foreign('fk_assigned_driver_id')
            ->references('id')->on('users');
            $table->foreign('fk_zone_id')
            ->references('id')->on('zones');
            $table->foreign('fk_restaurant_id')
            ->references('id')->on('restaurants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
