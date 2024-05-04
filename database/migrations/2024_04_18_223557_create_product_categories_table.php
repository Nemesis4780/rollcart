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
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('title');
            $table->integer('sort_order')->default(1000)->nullable();

            // SEO
            $table->string('seo_title')->nullable();
            $table->mediumText('seo_keywords')->nullable();
            $table->mediumText('seo_description')->nullable();
            $table->boolean('seo_index')->default(true);
            $table->boolean('seo_follow')->default(true);

            // STATAMIC
            $table->string('slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
