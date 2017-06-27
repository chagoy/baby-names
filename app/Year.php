<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    public function names($year)
    {
    	return \App\Name::where(year, $year)->get();
    }
}
