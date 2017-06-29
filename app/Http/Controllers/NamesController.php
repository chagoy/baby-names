<?php

namespace App\Http\Controllers;
use App\Name;

use Illuminate\Http\Request;

class NamesController extends Controller
{
    public function show(Request $request)
    {
    	$name = $request->name;
    	$sex = $request->sex;
    	$data = Name::where('name', $name)
    			->where('sex', $sex)
    			->pluck('count', 'year');
    	return response()->json($data);
    }

    public function index()
    {
    	$boys = Name::where('sex', 'M')->orderBy('count', 'desc')->take(50)->get();

    	$girls = Name::where('sex', 'F')->orderBy('count', 'desc')->take(50)->get();

    	return view('layouts.top', compact('boys', 'girls'));
    }
}