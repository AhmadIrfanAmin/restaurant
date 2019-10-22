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
            $table->string('customer_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('address')->nullable();
            $table->string('appartment_no')->nullable();
            $table->string('buzzer')->nullable();
            $table->string('contact')->nullable();
            $table->string('distance')->nullable();
            $table->string('pickup_time')->nullable();
            $table->string('status')->nullable();
            $table->text('notes')->nullable();
            $table->unsignedBigInteger('fk_zone_id');
            $table->integer('delivery_price')->nullable();
            $table->integer('tip')->nullable();
            $table->enum('tip_by',['customer','restaurant']);
            $table->enum('payment_method',['machine','cash by customer','cash at restaurant']);
            $table->integer('order_price')->nullable();
            $table->unsignedBigInteger('fk_restaurant_id');
            $table->unsignedBigInteger('fk_assigned_driver_id')->nullable();
            $table->foreign('fk_assigned_driver_id')
            ->references('id')->on('users');
            $table->foreign('fk_zone_id')
            ->references('id')->on('zones');
            $table->foreign('fk_restaurant_id')
            ->references('id')->on('restaurants');
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
        Schema::dropIfExists('orders');
    }
}
