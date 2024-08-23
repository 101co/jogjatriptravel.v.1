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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 100)->nullable(true);
            $table->string('alias', length: 50)->nullable(false)->unique(true);
            $table->string('phone', length: 15)->nullable(false);
            $table->boolean('is_contact_person')->nullable(false)->default(false);
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
        Schema::dropIfExists('contacts');
    }
};
