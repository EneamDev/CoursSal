<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Utilisateur extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table='utilisateur';

    protected $fillable = [
        'nom',
        'email',
        'role_id',
        'password',
        'filiere_id',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function programmation()
    {
        return $this->belongsTo(Programmation::class, utilisateur_id);
    }

    public function roles()
    {
        return $this->belongsTo(Role::class, role_id);
    }

    public function permutationSalle()
    {
        return $this->belongsToMany(PermutationSalle::class, permutationSalle_utilisateur);
    }

    public function interruptions()
    {
        return $this->belongsToMany(Interruptions::class, utilisateur_id);
    }

}
