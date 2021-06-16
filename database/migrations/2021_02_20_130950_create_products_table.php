<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_ar');
            $table->text('points');
            $table->text('points_ar');
            $table->text('description');
            $table->text('description_ar');
            $table->text('features');
            $table->text('features_ar');
            $table->foreignId('sub_category_id')->constrained()->onDelete('cascade');
            $table->text('images');
            $table->string('configuration_image_url')->nullable();
            $table->string('specifications_image_url');
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
        Schema::dropIfExists('products');
    }
}
