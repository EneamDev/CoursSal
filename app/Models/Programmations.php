<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $enseignant_id
 * @property integer $filiere_id
 * @property integer $user_id
 * @property integer $ue_id
 * @property string $created_at
 * @property string $updated_at
 * @property integer $mh_tp
 * @property integer $mh_cm_td
 * @property integer $debut_cours
 * @property integer $heure_debut
 * @property integer $horaire_jour
 * @property Interruption[] $interruptions
 * @property Permutationsalle[] $permutationsalles
 * @property Enseignant $enseignant
 * @property Ue $ue
 * @property Filiere $filiere
 * @property User $user
 */
class Programmations extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['enseignant_id', 'filiere_id', 'user_id', 'ue_id', 'created_at', 'updated_at', 'mh_tp', 'mh_cm_td', 'debut_cours', 'heure_debut', 'horaire_jour'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function interruptions()
    {
        return $this->hasMany('App\Models\Interruption');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function permutationsalles()
    {
        return $this->hasMany('App\Models\Permutationsalle');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function enseignant()
    {
        return $this->belongsTo('App\Models\Enseignant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ue()
    {
        return $this->belongsTo('App\Models\Ue');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function filiere()
    {
        return $this->belongsTo('App\Models\Filiere');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
