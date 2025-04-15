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
        Schema::create('scan_logs', function (Blueprint $table) {
            $table->id();
            $table->string('scanner_type'); // Type of user who scanned (security, admin, etc.)
            $table->unsignedBigInteger('scanner_id'); // ID of user who scanned
            $table->string('qr_type'); // Type of QR code (resident, invitation)
            $table->unsignedBigInteger('qr_id'); // ID related to the QR code
            $table->string('status'); // success, warning, error
            $table->json('details')->nullable(); // Additional details about the scan
            $table->timestamp('scanned_at'); // When the scan occurred
            $table->timestamps();
            
            // Optional: Add indexes to improve query performance
            $table->index(['scanner_type', 'scanner_id']);
            $table->index(['qr_type', 'qr_id']);
            $table->index('status');
            $table->index('scanned_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scan_logs');
    }
};
