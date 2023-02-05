<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;

    protected $table='enseignant';


    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'numero'



    ];


    public function ue()
    {
        return $this->belongsToMany(Ue::class, enseignant_ue);
    }


    public function programmation()
    {
        return $this->belongsTo(Programmation::class, enseignant_id);
    }





}
