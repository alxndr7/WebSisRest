<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceAndroid extends Controller
{
    public function serviceObtenerConsumos(){

        $ultimosConsumos = \DB::select('call ultimosComsumos()');
        return response()->json($ultimosConsumos);
    }
}
