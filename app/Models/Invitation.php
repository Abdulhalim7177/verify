<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'guest_name',
        'description',
        'expire_at',
        'status',
        'qrcodetoken',
        'qrcode',
        'is_shared',
        'street_address',
        'house_number',   
    ];
    
    protected $casts = [
        'expire_at' => 'datetime',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scanLogs()
    {
        return $this->hasMany(ScanLog::class);
    }
}