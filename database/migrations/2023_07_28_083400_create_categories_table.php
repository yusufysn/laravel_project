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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->text('content')->nullable();
            $table->unsignedBigInteger('cat_ust')->nullable();
            $table->enum('status', ['0', '1'])->default('1');

            $table->foreign('cat_ust')->on('categories')->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
