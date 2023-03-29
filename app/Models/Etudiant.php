<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property integer $id
 * @property integer $matricule
 * @property string $nom
 * @property string $prenoms
 * @property string $email
 * @property integer $numero
 * @property string $dateNaissance
 * @property string $created_at
 * @property string $updated_at
 */
class Etudiant extends Authenticatable
{
    /**
     * @var array
     */

    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['role_id', 'filiere_id', 'matricule', 'nom', 'prenoms', 'email', 'numero',
        'dateNaissance', 'created_at', 'updated_at'];

    public function roles()
    {
        return $this->belongsTo(Role::class);
    }
}
