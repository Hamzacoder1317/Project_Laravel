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
        Schema::create('products', function (Blueprint $table) {
            $table->id('pro_ID');
            $table->string('pro_Name')->unique();
            $table->string('pro_Desc');
            $table->integer('pro_price');

            $table->unsignedBigInteger('pro_cate_id');
            $table->foreign('pro_cate_id')->references('category_ID')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
