<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('meta_tag')->nullable();
            $table->string('meta_label')->nullable();
            $table->text('meta_key')->nullable();
            $table->text('meta_value')->nullable();
            $table->enum('meta_input',['text','checkbox','textarea'])->default('text');
            $table->string('restaurant_url')->nullable();
            $table->boolean("by_admin")->default(0);
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
        Schema::dropIfExists('settings');
    }
}
