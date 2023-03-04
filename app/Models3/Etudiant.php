<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
class Etudiant extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['matricule', 'nom', 'prenoms', 'email', 'numero', 'dateNaissance', 'created_at', 'updated_at'];
}
