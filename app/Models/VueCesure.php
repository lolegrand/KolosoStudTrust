<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $annee
 * @property string $nom
 * @property string $prenom
 * @property string $semestre
 */
class VueCesure extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'VueCesure';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = '';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'annee', 'nom', 'prenom', 'semestre'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'annee' => 'int', 'nom' => 'string', 'prenom' => 'string', 'semestre' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
