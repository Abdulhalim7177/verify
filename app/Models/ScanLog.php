<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScanLog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'invitation_id',
        'ip_address',
        'user_agent',
        'is_valid',
        'validation_message'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'details' => 'array',
        'scanned_at' => 'datetime',
    ];

    /**
     * Get the scanner model.
     */
    public function scanner()
    {
        return $this->morphTo();
    }

    /**
     * Get the scanned QR code owner model.
     */
    public function scannable()
    {
        return $this->morphTo('qr_owner');
    }
    // In app/Models/Invitation.php
public function scanLogs()
{
    return $this->hasMany(ScanLog::class);
}
}