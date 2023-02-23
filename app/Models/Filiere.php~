<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $salle_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $effectif
 * @property Salle $salle
 * @property FilieresUe[] $filieresUes
 * @property Programmation[] $programmations
 * @property User[] $users
 * @property Utilisateur[] $utilisateurs
 */
class Filiere extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['salle_id', 'created_at', 'updated_at', 'effectif'];

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
