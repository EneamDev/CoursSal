<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;


    protected $table='filiere';


    protected $fillable = [
        'nom',
        'effectif',
        "salle_id"



    ];


    public function salle()
    {
        return $this->hasMany(Salle::class, salle_id);
    }


    public function ue()
    {
        return $this->belongsToMany(Ue::class, filiere_ue);
    }

    public function programmation()
    {
        return $this->belongsTo(Programmation::class, filiere_id);
    }

}
