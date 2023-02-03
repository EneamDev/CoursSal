<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmation extends Model
{
    use HasFactory;

    protected $fillable = [
        'mh_tp',
        'mh_cm_td',
        'debut_cours',
        'heure_debut',
        'horaire_jour',
        'attribute'

    ];

}
