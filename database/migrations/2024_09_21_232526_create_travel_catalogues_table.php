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
        Schema::create('travel_catalogues', function (Blueprint $table) {
            $table->id();
            $table->string('title', length: 100)->nullable(false)->unique(false);
            $table->string('sub_title', length: 100)->nullable(false)->unique(false);
            $table->string('cover_images', length: 1000)->nullable(true)->unique(false);
            $table->string('facilites', length: 500)->nullable(true)->unique(false);
            $table->string('packages', length: 10000)->nullable(true)->unique(false);
            $table->string('term_condition', length: 500)->nullable(true)->unique(false);
            $table->string('contact_person', length: 500)->nullable(false)->unique(false);
            $table->boolean('is_active')->nullable(false)->default(true);
            $table->string('created_by', length: 100)->nullable(true);
            $table->string('updated_by', length: 100)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_catalogues');
    }
};
