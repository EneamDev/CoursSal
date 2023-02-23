<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $programmation_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $date_actuelle
 * @property string $debut_occupation
 * @property string $fin_occupation
 * @property string $raisonDePermutation
 * @property string $raisonLiberation
 * @property string $utilisateur_actuel
 * @property string $utilisateur_svprendre
 * @property string $salle_a_prendre
 * @property string $salle_actuelle
 * @property Programmation $programmation
 */
class PermutationSalles extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['programmation_id', 'created_at', 'updated_at', 'date_actuelle', 'debut_occupation', 'fin_occupation', 'raisonDePermutation', 'raisonLiberation', 'utilisateur_actuel', 'utilisateur_svprendre', 'salle_a_prendre', 'salle_actuelle'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function programmation()
    {
        return $this->belongsTo('App\Models\Programmation');
    }
}
