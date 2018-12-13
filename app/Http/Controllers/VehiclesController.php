<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use App\Models\suppliers;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles=Vehicles::all();
        return view('Vehicles.index')->with('vehicles',$vehicles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers=suppliers::all();
        return view('Vehicles.create')->with('suppliers',$suppliers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'vehicle_no'=> 'required',
            'insurance_expairy' => 'required',
            'licence_expairy'=>'required',
            'fitness_expairy' => 'required',
            'supplier_id' => 'required'
        ]);


        $vehicle=new Vehicles;
        $vehicle->vehicle_no=$request->input('vehicle_no');
        $vehicle->supplier_id=$request->input('supplier_id');

        $inputdateInsurance=date("Y-m-d",strtotime($request->input('insurance_expairy')));
        $vehicle->insurance_expairy=$inputdateInsurance;

        $inputdateLicences=date("Y-m-d",strtotime($request->input('licence_expairy')));
        $vehicle->licence_expairy=$inputdateLicences;

        $inputdateFitness=date("Y-m-d",strtotime($request->input('fitness_expairy')));
        $vehicle->fitness_expairy=$inputdateFitness;
        $vehicle->save();

        return redirect('vehicles/create')->with('success','Vehicle Added');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle= Vehicles::find($id);
        return view ('Vehicles.edit')->with('vehicle',$vehicle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'vehicle_no'=> 'required',
            'insurance_expairy' => 'required',
            'licence_expairy'=>'required',
            'fitness_expairy' => 'required'
        ]);


        $inputdate=date("Y-m-d",strtotime($request->input('insurance_expairy')));
        $vehicle=Vehicles::find($id);
        $vehicle->vehicle_no=$request->input('vehicle_no');

        $inputdateInsurance=date("Y-m-d",strtotime($request->input('insurance_expairy')));
        $vehicle->insurance_expairy=$inputdate;

        $inputdateLicences=date("Y-m-d",strtotime($request->input('licence_expairy')));
        $vehicle->licence_expairy=$inputdateLicences;

        $inputdateFitness=date("Y-m-d",strtotime($request->input('fitness_expairy')));
        $vehicle->fitness_expairy=$inputdateFitness;
        $vehicle->save();

        return redirect('vehicles')->with('success','Vehicle Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Vehicles=Vehicles::find($id);
        $Vehicles->delete();
        return redirect('/vehicles')->with('success','Post Removed');
    }
}
