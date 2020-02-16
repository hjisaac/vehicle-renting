<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Vehicle\Vehicle;

class VehicleController extends Controller
{

    public  function  __construct()
    {
        //$this->middleware('auth');
    }

    public function create(){
        return view('vehicle-form');
    }

    public function store(Request $request){

        $rules = [
            'matriculation' =>'required|unique:vehicles',
            'brand'=>'required',
            'model'=>'required',
            'numberPlace'=>'required',
            'numberLuggage'=>'required',
            'price'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];

        $customMessage = [
            'required' => 'Le champ :attribute est obligatoire'
        ];

        $request->validate($rules);

        $data = $request->all();

        $imageName = time().'.'.$request->image->extension();

        $data['image']=$imageName;

        $request->image->move(public_path('images'), $imageName);

        Vehicle::create($data);

        //print_r($data);

        session(['success' => 'Informations bien stockees']);


        return back();

    }

    public function index(){

        $vehicles = Vehicle::all()->toArray(); // recuperation de la liste de vehicules
        //print_r($vehicles);
        return view('admin-dashboard', ['vehicles'=>$vehicles]);
    }

    public function editer(Request $request,$id){

        $rules = [
            'matriculation' =>'required|unique:vehicles',
            'brand'=>'required',
            'model'=>'required',
            'numberPlace'=>'required',
            'numberLuggage'=>'required',
            'price'=>'required',
        ];

        $request->validate($rules);

        $data = $request->all();

        $vehicle = Vehicle::findOrFail($id);

        $vehicle['matriculation'] = $data['matriculation'];
        $vehicle['brand'] = $data['brand'];
        $vehicle['model'] = $data['model'];
        $vehicle['numberPlace'] = $data['numberPlace'];
        $vehicle['numberLuggage'] = $data['numberLuggage'];
        $vehicle['price'] = $data['price'];

        $vehicle->save();

        return redirect()->action('VehicleController@index');

    }

    public function supprimer($id){

        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->action('VehicleController@index');
    }
}
