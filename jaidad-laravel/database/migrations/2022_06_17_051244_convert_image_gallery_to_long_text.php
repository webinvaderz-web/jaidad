<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConvertImageGalleryToLongText extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('property_gallery_images', function (Blueprint $table) {
            //
            $table->longText('image_gallery')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_gallery_images', function (Blueprint $table) {
            //
            $table->text('image_gallery')->nullable()->change();
        });
    }
}
