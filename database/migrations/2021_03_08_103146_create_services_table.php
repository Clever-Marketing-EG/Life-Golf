<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_ar');
            $table->string('description');
            $table->string('description_ar');
            $table->string('title1');
            $table->string('title1_ar');
            $table->string('title2');
            $table->string('title2_ar');
            $table->json('points')->nullable();
            $table->json('points_ar')->nullable();
            $table->json('points_2')->nullable();
            $table->json('points_2_ar')->nullable();
            // $table->string('service_type');
            $table->string('image_url');
            $table->string('image_url1');
            $table->string('image_url2');

            // $table->json('descArray2');
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
        Schema::dropIfExists('services');
    }
}
