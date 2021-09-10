<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * Get the user policy for the payment.
     */
    public function policy()
    {
        return $this->belongsTo(\App\Models\UserPolicy::class);
    }
}
