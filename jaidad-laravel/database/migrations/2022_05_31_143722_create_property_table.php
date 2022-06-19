<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description');
            $table->integer('price');
            $table->string('property_type');
            $table->integer('feature_id')->nullable();
            $table->integer('old_price')->nullable();
            $table->integer('parent_property_id')->nullable();
            $table->string('type');
            $table->string('location');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->string('parking_spaces');
            $table->longText('area');
            $table->string('year_built');
            $table->string('plot_size_prefix');
            $table->bigInteger('plot_size');
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
        Schema::dropIfExists('properties');
    }
}
