<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interruptions extends Model
{
    use HasFactory;


    protected $fillable = [
        'date_interruption',
        'fin_interruption',
        'date_reprise',
        'heure_debut',
        'horaire_jour'


    ];


}
