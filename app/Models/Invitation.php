<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'guest_name',
        'description',
        'expire_at',
        'status',
        'qrcode',
        'qrcodetoken',
    ];

    // Relationship to the user who created the invitation
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}