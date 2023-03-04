<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $programmation_id
 * @property integer $user_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $date_interruption
 * @property string $fin_interruption
 * @property string $date_reprise
 * @property string $heure_debut
 * @property string $horaire_jour
 * @property User $user
 * @property Programmation $programmation
 */
class Interruptions extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['programmation_id', 'user_id', 'created_at', 'updated_at', 'date_interruption', 'fin_interruption', 'date_reprise', 'heure_debut', 'horaire_jour'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function programmation()
    {
        return $this->belongsTo('App\Models\Programmation');
    }
}
