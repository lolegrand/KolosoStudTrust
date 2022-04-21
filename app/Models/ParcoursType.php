<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $libelle
 */
class ParcoursType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ParcoursType';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'libelle';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [

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
//    protected $casts = [
//        'libelle' => 'string'
//    ];

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
    public $timestamps = false;

    // Scopes...

    // Functions ...

    //return list of medicines
    public function UEs(){
        return $this->belongsToMany(UE::class, 'ParcoursTypeEstComposeUe','libele','codeUE')->withPivot([
            'numSemestre'
        ]);
    }

    // Relations ...
}
