<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**f
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->nullable();
            $table->string('restaurant_name')->nullable();
            $table->string('price_range')->nullable();
            $table->string('size')->nullable();
            $table->string('description')->nullable();
            $table->unsignedInteger('price_id')->nullable();
            $table->unsignedInteger('color_id')->nullable();
            $table->unsignedInteger('cuisine_id')->nullable();
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
        Schema::dropIfExists('restaurants');
    }
}
