<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $nom
 * @property string $prenom
 * @property int    $anne1
 * @property int    $anne2
 */

////TODO 8 :
/// le  modèle permet de communiquer avec la base de données.
/// chaque modèle doit être configurer pour garantir la bonne liaison&communication entre lui et une table de la BDD
/// pour cela il faut d'abord  préciser le nom de la table  $table = 'Vue2Cesures';
/// puis préciser le $primaryKey ainsi que $fillable c-a-d les attributs qui seront utiliser lors du CRUD.... etc.

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
        'nom', 'prenom', 'anne1', 'anne2'
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
        'nom' => 'string', 'prenom' => 'string', 'anne1' => 'int', 'anne2' => 'int'
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
