<?php 

namespace App\Domain\User ;

use Illuminate\Database\Eloquent\Model ;

class ReservationModel extends Model {
    protected $fillable = [
        'pickup_date',
        'returned_date',
        'pickup_location',
        'returned_location',
        'user_id',
        'vehicle_id',
        'is_validate',
    ];

    protected $hidden = [

    ];
}