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
        'scanner_type',
        'scanner_id',
        'qr_type',
        'qr_id',
        'status',
        'details',
        'scanned_at',
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
}