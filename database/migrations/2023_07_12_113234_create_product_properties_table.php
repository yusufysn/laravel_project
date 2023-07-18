<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_properties', function (Blueprint $table) {
           $table->integer('property_id')->unsigned();
           $table->integer('product_id')->unsigned();
           $table->string('property_value');
           $table->foreign('property_id')->on('properties')->references('id')
               ->onDelete('cascade')->onUpdate('cascade');
           $table->foreign('product_id')->on('products')->references('id')
                ->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_properties');
    }
};
