<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_ref',
        'payer_ref_no',
        'amount',
        'status',
        'paid_at',
    ];
    

    protected $dates = ['paid_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function paidBy()
{
    return $this->belongsTo(\App\Models\User::class, 'paid_by_user_id');
}
}
