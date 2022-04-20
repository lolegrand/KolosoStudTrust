<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int     $annee
 * @property int     $capacite
 * @property string  $codeUE
 * @property string  $libelle
 * @property string  $nom
 * @property string  $num
 * @property string  $prenom
 * @property string  $semestre
 * @property Date    $dateNaiss
 * @property boolean $impaire
 * @property boolean $pair
 */
class VueAjourneesDetail extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'VueAjourneesDetail';

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
        'annee', 'capacite', 'codeUE', 'dateNaiss', 'etat', 'impaire', 'libelle', 'modalite', 'nom', 'num', 'pair', 'prenom', 'semestre'
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
        'annee' => 'int', 'capacite' => 'int', 'codeUE' => 'string', 'dateNaiss' => 'date', 'impaire' => 'boolean', 'libelle' => 'string', 'nom' => 'string', 'num' => 'string', 'pair' => 'boolean', 'prenom' => 'string', 'semestre' => 'string'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'dateNaiss'
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
