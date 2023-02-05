<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ue extends Model
{
    use HasFactory;
protected $table='ue';

    protected $fillable = [
        'nom',

    ];


    public function ecue()
    {
        return $this->hasMany(Ecue::class, ue_id);
    }


    public function enseignant()
    {
        return $this->belongsToMany(Enseignant::class, enseignant_ue);
    }


    public function filiere()
    {
        return $this->belongsToMany(Filiere::class, filiere_ue);
    }

    public function programmation()
    {
        return $this->belongsToMany(Programmation::class, ue_id);
    }

}
