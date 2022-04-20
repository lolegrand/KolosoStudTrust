<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $anne1
 * @property int    $anne2
 * @property string $nom
 * @property string $prenom
 */
class Vue2Cesures extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Vue2Cesures';

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
        'anne1', 'anne2', 'nom', 'prenom'
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
        'anne1' => 'int', 'anne2' => 'int', 'nom' => 'string', 'prenom' => 'string'
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
