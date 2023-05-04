<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property integer $id
 * @property integer $role_id
 * @property integer $filiere_id
 * @property integer $matricule
 * @property string $nom
 * @property string $prenoms
 * @property string $email
 * @property integer $numero
 * @property string $password
 * @property string $dateNaissance
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Filiere $filiere
 * @property Role $role
 */
class Etudiant extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;
    /**
     * @var array
     */
    protected $fillable = ['role_id', 'filiere_id', 'matricule', 'nom', 'prenoms', 'email', 'numero', 'password', 'dateNaissance', 'remember_token', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function filiere()
    {
        return $this->belongsTo('App\Models\Filiere');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
}
