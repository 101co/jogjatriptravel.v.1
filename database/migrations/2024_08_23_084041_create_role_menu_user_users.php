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
        Schema::create('role_menu_user_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_menu_user_id')->constrained('role_menu_users');
            $table->foreignId('user_id')->constrained('users');
            $table->boolean('is_active')->nullable(false)->default(true);
            $table->string('created_by', length: 100)->nullable(false);
            $table->string('updated_by', length: 100)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_menu_user_users');
    }
};
