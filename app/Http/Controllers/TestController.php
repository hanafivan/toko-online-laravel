<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function pintuMasuk(Request $request){
        return view('product.display');
    }
}
