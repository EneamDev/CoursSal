<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $role_id
 * @property integer $filiere_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $nom
 * @property string $password
 * @property string $email
 * @property Filiere $filiere
 * @property Role $role
 */
class Utilisateur extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['role_id', 'filiere_id', 'created_at', 'updated_at', 'nom', 'password', 'email'];

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
