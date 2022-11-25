<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); //fetch all products from DB
        return view('product.list', ['products' => $products]);
    }

    public function create()
    {
        return view('product.add');
    }

    public function store(Request $request)
    {
        $newPost = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'active' => $request->active
        ]);
        
        return redirect('product/' . $newPost->id . '/edit');
    }

}
