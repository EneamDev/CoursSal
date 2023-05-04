<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property integer $id
 * @property string $nom
 * @property string $prenom
 * @property string $email
 * @property integer $numero
 * @property string $created_at
 * @property string $updated_at
 * @property EnseignantsUe[] $enseignantsUes
 * @property Programmation[] $programmations
 */
class Enseignant extends Model
{

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * @var array
     */
    protected $fillable = ['nom', 'prenom', 'email', 'numero', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enseignantsUes()
    {
        return $this->hasMany('App\Models\EnseignantsUe');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programmations()
    {
        return $this->hasMany('App\Models\Programmation');
    }
}
