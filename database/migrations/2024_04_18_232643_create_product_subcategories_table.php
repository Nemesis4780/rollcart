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
        Schema::create('product_subcategories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('title');
            $table->integer('sort_order')->default(1000)->nullable();
            $table->integer('category_id')->nullable();
            $table->string('slug')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_subcategories');
    }
};
