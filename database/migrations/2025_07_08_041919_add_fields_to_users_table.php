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
        Schema::table('users', function (Blueprint $table) {
            $table->string('photo')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('role')->default('user');
            $table->string('status')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['photo', 'phone', 'address', 'role', 'status']);
        });
    }
};
