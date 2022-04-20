<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $annee
 * @property string $codeUE
 */
class VueAjourneesAgg extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'VueAjourneesAgg';

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
        'annee', 'codeUE', 'echec', 'inscrit', 'porcentEchec'
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
        'annee' => 'int', 'codeUE' => 'string'
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
