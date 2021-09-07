<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPolicy extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'policy_plan_id',
        'user_id',
        'beneficiaries',
        'expiry_date',
        'renewal_date',
    ];

    /**
     * Get the user that owns the policy.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the policy plan that owns the policy.
     */
    public function plan()
    {
        return $this->belongsTo(PolicyPlan::class);
    }
}
