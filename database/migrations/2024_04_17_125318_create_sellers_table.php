<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('title')->nullable();
            $table->string('name')->nullable();

            $table->string('street')->nullable();
            $table->string('street_number')->nullable();
            $table->string('zip')->nullable();
            $table->string('place')->nullable();
//            $table->string('country', length:2)->nullable();
//            $table->string('country', length:2)
//                ->references('title_short')
//                ->on('countries')
//                ->onDelete('cascade')
//                ->nullable();
            $table->integer('country_id')
                ->references('id')
                ->on('countries')
                ->nullable();

            $table->string('logo')->nullable();
            $table->string('catalog_cover')->nullable();
            $table->mediumText('text')->nullable();

            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('url')->nullable();

            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();

            $table->boolean('is_specialist')->default(false);
            $table->boolean('is_online_seller')->default(false);
            $table->boolean('is_catalog_shipper')->default(false);

            $table->integer('sort_order')->default(1000)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
