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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('title')->nullable();
            $table->string('logo')->nullable();
            $table->string('url')->nullable();


//            $table->boolean('is_specialist')->default(false);
//            $table->boolean('is_online_seller')->default(false);


            $table->string('name')->nullable();

            $table->string('street')->nullable();
            $table->string('street_number')->nullable();
            $table->string('zip')->nullable();
            $table->string('place')->nullable();

            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();

            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();


            // STATAMIC
            $table->boolean('active')->default(true);
            $table->integer('sort_order')->default(1000)->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
