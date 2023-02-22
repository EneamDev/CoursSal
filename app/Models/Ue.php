<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property string $created_at
 * @property string $updated_at
 * @property Ecue[] $ecues
 * @property EnseignantUe[] $enseignantUes
 * @property FiliereUe[] $filiereUes
 * @property Programmation[] $programmations
 */
class Ue extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nom', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ecues()
    {
        return $this->hasMany('App\Models\Ecue');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enseignantUes()
    {
        return $this->hasMany('App\Models\EnseignantUe', 'ue');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function filiereUes()
    {
        return $this->hasMany('App\Models\FiliereUe');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function programmations()
    {
        return $this->hasMany('App\Models\Programmation');
    }
}
