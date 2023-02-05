<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmation extends Model
{
    use HasFactory;

    protected $table='programmation';

    protected $fillable = [
        'mh_tp',
        'mh_cm_td',
        'debut_cours',
        'heure_debut',
        'horaire_jour',
        'utilisateur_id',
        'filiere_id',
        'ue_id',
        'enseignant_id'

    ];

    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class, enseignant_id);
    }


    public function ue()
    {
        return $this->hasMany(Ue::class, ue_id);
    }

    public function filiere()
    {
        return $this->hasMany(Filiere::class, filiere_id);
    }

    public function interruptions()
    {
        return $this->belongsTo(Interruptions::class, programmation_id);
    }

    public function utilisateur()
    {
        return $this->hasMany(Utilisateur::class, utilisateur_id);
    }

    public function permutationSalle()
    {
        return $this->belongsTo(PermutationSalle::class, programmation_id);
    }

}
