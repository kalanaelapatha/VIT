<?php

namespace App\Http\Controllers;

use App\Models\brands;
use App\Models\subtypes;
use App\Models\types;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $brand=brands::all();
        $types=types::all();
        $subtypes=subtypes::all();

        return view('Settings.settings')->with(['brands'=>$brand,'types'=>$types,'subtypes'=>$subtypes]);
    }

    public function storebrand(Request $request)
    {

        $this->validate($request,[
            'name'=> 'required'
        ]);

        $brand=new brands;
        $brand->name=$request->input('name');
        $brand->save();

        return redirect('/settings')->with('success','Brand Added');;
    }

    public function deletebrand($id){

        $brand=brands::find($id);
        $brand->delete();
        return redirect('/settings')->with('success','Brand Removed');
    }

    public function deletetype($id){

        $type=types::find($id);
        $type->delete();
        return redirect('/settings')->with('success','Type Removed');
    }

    public function deletesubtype($id){

        $subtype=subtypes::find($id);
        $subtype->delete();
        return redirect('/settings')->with('success','Sub-type Removed');
    }
        // Handele the Vehicle Type
    public function storetype(Request $request)
    {

        $this->validate($request,[
            'name'=> 'required'
        ]);

        $type=new types;
        $type->vehicleType=$request->input('name');
        $type->save();

        return redirect('/settings')->with('success','Vehicle Type Added');;
    }
        //handele Vehicle SubType
    public function storesubtype(Request $request)
    {

        $this->validate($request,[
            'name'=> 'required'
        ]);

        $subtype=new subtypes;
        $subtype->vehicleSubType=$request->input('name');
        $subtype->save();

        return redirect('/settings')->with('success','Sub Type Added');;
    }
}
