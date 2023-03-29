<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;


    protected $fillable = ['role_id', 'name', 'email', 'email_verified_at',
        'password', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function interruptions()
    {
        return $this->hasMany('App\Models\Interruption');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programmations()
    {
        return $this->hasMany('App\Models\Programmation');
    }

    /**
     * @return BelongsTo
     */
    public function filiere()
    {
        return $this->belongsTo('App\Models\Filiere');
    }

    /**
     * @return BelongsTo
     */
    public function roles()
    {
        return $this->belongsTo(Role::class);
    }



}
