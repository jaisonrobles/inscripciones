<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class padroninternos extends Model
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'padroninternos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'cedula';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'teleono1',
                  'telefono2',
                  'telefono3',
                  'nombrefamiliar',
                  'email',
                  'direccion',
                  'inscritopor',
                  'prefesionoficio',
                  'frentemovimiento',
                  'notas',
                  'activo',
                  'dirigente',
                  'usrinscripcion',
                  'fechainscripcion',
                  'usrupdate',
                  'fechaupdate'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    



}
