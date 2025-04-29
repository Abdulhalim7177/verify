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
    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
    
    // In app/Models/Invitation.php
public function scanLogs()
{
    return $this->hasMany(ScanLog::class);
}
}