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
            $table->id();
            $table->timestamps();

            $table->string('title')->nullable();

            $table->mediumText('short_description')->nullable();
            $table->mediumText('description')->nullable();

            $table->mediumText('images')->nullable();

            $table->integer('sort_order')->default(1000)->nullable();

            $table->string('crosselling')->nullable();
            $table->string('datasheet')->nullable();

//            $table->integer('subcategory_id')
//                ->references('id')
//                ->on('productSubcategories')
//                ->nullable();

            $table->string('subcategory_id')->nullable();


            // SEO
            $table->string('seo_title')->nullable();
            $table->mediumText('seo_keywords')->nullable();
            $table->mediumText('seo_description')->nullable();
            $table->boolean('seo_index')->default(true);
            $table->boolean('seo_follow')->default(true);


            // STATAMIC
            $table->boolean('active')->default(true);
            $table->string('slug')->nullable();
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
