<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ecue extends Model
{
    use HasFactory;

    protected $table='ecue';

    protected $fillable = [
        'nom',
        'ue_id'

    ];

    public function ue()
    {
        return $this->belongsTo(Ue::class, ue_id);
    }


}
