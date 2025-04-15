<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Link to the user who created the invitation
            $table->string('guest_name');
            $table->time('expire_at');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('qrcode')->nullable(); // To store the QR code path
            $table->string('description')->nullable(); // To store description
            $table->string('qrcodetoken')->nullable(); // To store the QR code token
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
