<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string  $codeUE
 * @property string  $libelle
 * @property int     $capacite
 * @property boolean $impaire
 * @property boolean $pair
 */
class UE extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'UE';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'codeUE';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'capacite', 'impaire', 'libelle', 'modalite', 'pair'
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
        'codeUE' => 'string', 'capacite' => 'int', 'impaire' => 'boolean', 'libelle' => 'string', 'pair' => 'boolean'
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
