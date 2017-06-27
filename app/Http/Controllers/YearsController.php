<?php

namespace App\Http\Controllers;
use App\Name;

use Illuminate\Http\Request;

class YearsController extends Controller
{
    public function show($year)
    {
    	$years = Name::where('year', $year)
    		->orderBy('count', 'desc')
    		->take(10)
    		->pluck('name', 'count');

    	//dd(json_encode($years));

    	return view('layouts.year', compact('years'));
    }
}
