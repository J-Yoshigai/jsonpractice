<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    //
    public function index(){
        $vehicles = Vehicle::all();
        
        return view('vehicles.index', compact('vehicles'));
    }

    public function create(){
        return view('vehicles.create');
    }

    public function store(Request $request){
        $vehicle = New Vehicle;
        $vehicle->vehicle_name=$request->vehicle_name;

        $vehicle->capacities = json_encode(
            [
                'people' => intval($request->people),
                'suitcase' => intval($request->suitcase)
            ]);
        $vehicle->save();
        return redirect('/vehicles');
        
    }


    public function edit($id){
        $vehicle = Vehicle::find($id);
        return view('vehicles.edit',compact('vehicle'));
    }

    public function update($id,Request $request){
        $vehicle = Vehicle::find($id);
        $vehicle->vehicle_name = $request->vehicle_name;
        $vehicle->capacities = json_encode(
            [
                'people' => intval($request->people),
                'suitcase' => intval($request->suitcase)
            ]);
        $vehicle->save();
        return redirect('/vehicles');
    }

}
