<?php

namespace App\Domain\Vehicle;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model {

    protected $fillable = [
        'matriculation',
        'brand',
        'model',
        'numberPlace',
        'numberLuggage',
        'price',
        'image'
    ];



    protected $casts = [

        'registrationDate' => 'datetime',
        'numberPlace' => 'integer',
        'numberLuggage' => 'integer',
        'price' => 'real'
    ];

    protected $table = 'vehicles';
    //protected  $primaryKey = 'matriculation';
    //public $incrementing = false;
    //protected $keyType = 'string';
    //public $timestamps = false;
    //protected $dateFormat = 'U';
    /*
     * const CREATED_AT = 'creation_date';
       const UPDATED_AT = 'last_update';
     * */
}