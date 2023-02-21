<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermutationSalle extends Model
{
    use HasFactory;


    protected $fillable = [
        'date_actuelle',
        'debut_occupation',
        'fin_occupation',
        'raisonDePermutation',
        'raisonPermutation',
        'accordPermutation'

    ];



}
