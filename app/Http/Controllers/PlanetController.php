<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = DB::select('select * from planets');
        return view('planets')->with(['planets' => $planets]);
    }

    public function show($planet) 
    {
        $thisPlanet = collect($this->planets)->firstWhere('name', ucfirst($planet));

        return view('planet')->with(['planet' => $thisPlanet]);


    }
}
