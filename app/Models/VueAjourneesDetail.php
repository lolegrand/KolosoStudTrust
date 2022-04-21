<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string  $codeUE
 * @property string  $libelle
 * @property string  $num
 * @property string  $semestre
 * @property string  $nom
 * @property string  $prenom
 * @property boolean $impaire
 * @property boolean $paire
 * @property int     $capacite
 * @property int     $annee
 * @property Date    $dateNaiss
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
        'codeUE', 'modalite', 'libelle', 'impaire', 'paire', 'capacite', 'num', 'annee', 'semestre', 'etat', 'nom', 'prenom', 'dateNaiss'
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
        'codeUE' => 'string', 'libelle' => 'string', 'impaire' => 'boolean', 'paire' => 'boolean', 'capacite' => 'int', 'num' => 'string', 'annee' => 'int', 'semestre' => 'string', 'nom' => 'string', 'prenom' => 'string', 'dateNaiss' => 'date'
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
