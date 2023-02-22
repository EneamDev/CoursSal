<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $ue_id
 * @property string $nom
 * @property string $created_at
 * @property string $updated_at
 * @property Ue $ue
 */
class Ecue extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['ue_id', 'nom', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ue()
    {
        return $this->belongsTo('App\Models\Ue');
    }
}
