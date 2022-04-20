<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $nom
 * @property string $num
 * @property string $prenom
 */
class VueECTS extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'VueECTS';

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
        'nbECTS', 'nom', 'num', 'prenom'
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
        'nom' => 'string', 'num' => 'string', 'prenom' => 'string'
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
