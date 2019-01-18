<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function showAll(){
        $dataProductDariModel = Product::all();
        return view('product.display');
    }
    
    public function show(){
        
    }
}

// return view(‘product.display’, [“products” =>$dataProductDariModel]);