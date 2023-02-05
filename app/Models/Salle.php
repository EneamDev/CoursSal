<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    use HasFactory;

    protected $table='salle';

    protected $fillable = [
        'nom',
        'nbrePlace'

    ];


    public function permutation()
    {
        return $this->belongsTo(PermutationSalle::class, programmation_id);
    }


    public function salle()
    {
        return $this->belongsTo(Filiere::class, salle_id);
    }

}
