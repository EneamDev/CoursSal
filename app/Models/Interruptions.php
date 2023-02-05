<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interruptions extends Model
{
    use HasFactory;

    protected $table='interruptions';


    protected $fillable = [
        'date_interruption',
        'fin_interruption',
        'date_reprise',
        'heure_debut',
        'horaire_jour',
         'prorammation_id',
          'utilisateur_id'
    ];

    public function programmation()
    {
        return $this->hasMany(Programmation::class, programmation_id);
    }

    public function utilisateur()
    {
        return $this->hasMany(Utilisateur::class, utilisateur_id);
    }


}
