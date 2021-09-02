<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Agent extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The users(clients/recuring users) that belong to the agent.
     */
    public function clients()
    {
        return $this->belongsToMany(User::class,'client_agents','agent_id','user_id')
        ->withPivot('lead')->wherePivot('lead','customer');
    }
     
    /**
     * The users(prospects) that belong to the agent.
     */
    public function prospects()
    {
        return $this->belongsToMany(User::class,'client_agents','agent_id','user_id')
        ->withPivot('lead')->wherePivot('lead','!=','customer');
    }
}
