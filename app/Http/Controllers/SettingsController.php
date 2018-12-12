<?php

namespace App\Http\Controllers;

use App\Models\brands;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $brand=brands::all();

        return view('Settings.settings')->with('brands',$brand);
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
}
