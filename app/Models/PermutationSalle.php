<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermutationSalle extends Model
{
    use HasFactory;


    protected $table='permutationSalle';

    protected $fillable = [
        'date_actuelle',
        'debut_occupation',
        'fin_occupation',
        'raisonDePermutation',
        'raisonLiberation',
        'accordPermutation',
        'programmation_id',
        'utilisateur_actuel',
        'utilisateur_svprendre',
        'salle_actuelle',
        'salle_a_prendre',


    ];


    public function salle()
    {
        return $this->hasMany(Salle::class, programmation_id);
    }

    public function programmation()
    {
        return $this->hasMany(Programmation::class, programmation_id);
    }

    public function utilisateur()
    {
        return $this->belongsToMany(Utilisateur::class, permutationSalle_utilisateur);
    }

}
