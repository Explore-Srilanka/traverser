<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;

class HomeController extends Controller{
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $districts = District::all();
        return view('home', ['districts' => 'districts']);
    }


    public function add_district(){
        return view('add_district');
    }

    public function store_district(Request $request){
        $request->validate([
            'name' => 'required|string'
        ]);

        $district = new District;

        $district->name = $request->name;

        $district->save();

        return redirect()->back()->with('success', 'District has been added successfully');   
    }
}
