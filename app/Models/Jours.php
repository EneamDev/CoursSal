<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jours extends Model
{
    use HasFactory;

    protected $fillable = ['jour', 'created_at', 'updated_at'];


    public function programmations() {
        return $this->belongsToMany(Programmations::class);
    }


}
