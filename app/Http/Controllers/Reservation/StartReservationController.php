<?php
namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StartReservationController extends Controller
{
    public function index(){
        return view('start');
    }

    public function store(Request $request){
        $data = $request->all();
        
        $data["pickup_date"] = implode("-", array_reverse(explode("/", $data["pickup_date"])));
        $data["returned_date"] = implode("-", array_reverse(explode("/", $data["returned_date"])));
        $data["pickup_date"] = $data["pickup_date"] . " " . $data["pickup_heure"];
        $data["returned_date"] = $data["returned_date"] . " " . $data["returned_heure"];
        
        //going to remove hour entries
        unset($data["pickup_heure"]);
        unset($data["returned_heure"]);
        $request->session()->put('reservation_data', $data);
        
        $my_date = $request->session()->get('reservation_data');
        // Reservation::create();
        print_r("<hr/>");
        print_r($my_date);

        return view(reservation-step2);
        
    }

    
}