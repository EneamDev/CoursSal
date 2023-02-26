<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property integer $id
 * @property integer $salle_id
 * @property string $nom
 * @property string $created_at
 * @property string $updated_at
 * @property integer $effectif
 * @property Etudiant[] $etudiants
 * @property Salle $salle
 * @property FilieresUe[] $filieresUes
 * @property Programmation[] $programmations
 * @property User[] $users
 * @property Utilisateur[] $utilisateurs
 */
class Filiere extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * @var array
     */
    protected $fillable = ['salle_id', 'nom', 'created_at', 'updated_at', 'effectif'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function etudiants()
    {
        return $this->hasMany('App\Models\Etudiant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salle()
    {
        return $this->belongsTo('App\Models\Salle');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function filieresUes()
    {
        return $this->hasMany('App\Models\FilieresUe');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programmations()
    {
        return $this->hasMany('App\Models\Programmation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function utilisateurs()
    {
        return $this->hasMany('App\Models\Utilisateur');
    }
}
