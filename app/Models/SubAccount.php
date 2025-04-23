<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubAccount extends Model
{
    protected $fillable = [
        'name',
        'email',
        'relationship',
        'user_id'
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    
    public function user()
{
    return $this->belongsTo(\App\Models\User::class);
}
}
