<?php
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Name;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.name');
});

Route::get('/names', 'NamesController@show');

Route::get('/{year}', 'YearsController@show');
