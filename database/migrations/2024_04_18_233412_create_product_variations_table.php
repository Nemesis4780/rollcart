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
        Schema::create('product_variations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('title')->nullable();

            $table->integer('product_id')
                ->references('id')
                ->on('product')
                ->nullable();
            $table->string('slug')->nullable();

            $table->string('article_number')->nullable();
//            $table->integer('sku')->nullable();


            // STATAMIC
            $table->boolean('active')->dafault(true);
            $table->integer('sort_order')->default(1000)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variations');
    }
};
