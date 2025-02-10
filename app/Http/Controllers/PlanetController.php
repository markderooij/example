<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Planet;
use Illuminate\Support\Collection;

class PlanetController extends Controller
{
    public function index()
    {
        //$planets = DB::table('planets')->get();
        $planets = Planet::all();
        return view('planets')->with(['planets' => $planets]);
    }

    public function show($planet) 
    {
        $planet = DB::select('SELECT * FROM `planets` WHERE name = ?', [$planet]);
    
        //dd($planet[0]);
        return view('universe.planet')->with(['planet' => $planet[0]]);


    }
}
