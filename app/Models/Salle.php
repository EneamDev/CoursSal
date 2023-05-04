<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nom
 * @property string $created_at
 * @property string $updated_at
 * @property integer $nbrePlace
 * @property Filiere[] $filieres
 */
class Salle extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nom', 'created_at', 'updated_at', 'nbrePlace'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function filieres()
    {
        return $this->hasMany('App\Models\Filiere');
    }

    public function programmations()
    {
        return $this->hasManyThrough(Programmations::class, Filiere::class);
    }



}
