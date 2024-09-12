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

    public function store(Request $request)
    {
        $request->validate([
        'name'=>'required|max:255|string',
        'description'=>'required|max:255|string',
        'price'=>['required','numeric'],
        'qty'=>'required|integer|min:1',
        'is_active'=>'sometimes'
        ]);

        Products::create([
        'name'=>$request->name,
        'description'=>$request->description,
        'price'=>$request->price,
        'qty'=>$request->qty,
        'is_active'=>$request->is_active == true?1:0,

        ]);
        return redirect('products/create')->with('status','Product created');
    }
    public function edit(int $id)
    {
        $products=Products::findOrFail($id);
        return view('products.edit',compact('products'));
    }

    public function update(Request $request,int $id)
    {
        $request->validate([
            'name'=>'required|max:255|string',
            'description'=>'required|max:255|string',
            'price'=>['required','numeric'],
            'qty'=>'required|integer|min:1',
            'is_active'=>'sometimes'
            ]);

            Products::findOrFail($id)->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'qty'=>$request->qty,
            'is_active'=>$request->is_active == true?1:0,

            ]);
            return redirect()->back()->with('status','Product Updated');
    }
}
