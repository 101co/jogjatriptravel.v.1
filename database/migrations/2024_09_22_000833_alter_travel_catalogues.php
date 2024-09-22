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
        Schema::table('travel_catalogues', function (Blueprint $table) {
            $table->json('cover_images')->nullable()->change();
            $table->json('packages')->nullable()->change();
            $table->json('term_condition')->nullable()->change();
            $table->json('contact_person')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
