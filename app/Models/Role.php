<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property string $created_at
 * @property string $updated_at
 * @property User[] $users
 * @property Utilisateur[] $utilisateurs
 */
class Role extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nom', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function etudiant()
    {
        return $this->hasMany(Etudiant::class);
    }
}
