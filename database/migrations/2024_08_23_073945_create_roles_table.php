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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('initial', length: 10)->nullable(false)->unique(true);
            $table->string('name', length: 100)->nullable(false);
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
        Schema::dropIfExists('roles');
    }
};
