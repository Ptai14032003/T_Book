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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('book_title')->unique();
            $table->integer('price');
            $table->integer('promotion_price')->nullable();
            $table->integer('publishing_year');
            $table->integer('quantity');
            $table->string('image');
            $table->integer('sold')->default(0);
            $table->integer('views')->default(0);
            $table->text('description');
            $table->unsignedBigInteger('cate_id');
            $table->unsignedBigInteger('publisher_id');
            $table->timestamps();
            $table->foreign('cate_id')->references('id')->on('categories');
            $table->foreign('publisher_id')->references('id')->on('publishers');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
