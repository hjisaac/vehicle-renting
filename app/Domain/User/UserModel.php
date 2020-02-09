<?php 

namespace App\Domain\User ;

use Illuminate\Database\Eloquent\Model ;

class User extends Model {

    // TODO : have to hash the password and remove space from string in setterrs
    
    protected $fillable = [
        'firstname', 
        'lastname', 
        'email', 
        'password', 
        'tel', 
        'pseudo'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];


     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}