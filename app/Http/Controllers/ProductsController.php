<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products=Products::get();
        
        return view('products.index',compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }
}
