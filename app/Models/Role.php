<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table='role';


    protected $fillable = [
        'nom',


    ];


    public function utilisateur()
    {
        return $this->hasMany(Utilisateur::class, role_id);
    }
}
