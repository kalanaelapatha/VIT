<?php

namespace App\Http\Controllers;


use App\Models\suppliers;
use Illuminate\Http\Request;
use App\Models\Vehicles;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles=Vehicles::count();
        $suppliers=suppliers::count();
        return view('home')->with(['vehicles'=>$vehicles,'suppliers'=>$suppliers]);
    }
}
