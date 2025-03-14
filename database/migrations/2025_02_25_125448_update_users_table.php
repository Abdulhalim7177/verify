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
                $table->string('role')->default('resident'); // Default role is resident
                $table->string('phone')->nullable();
                $table->string('altphone')->nullable();
                $table->string('qrcode')->nullable();
                $table->text('address')->nullable();
                $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'phone', 'altphone', 'qrcode', 'address', 'image']);
        });
    }
};
