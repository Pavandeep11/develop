<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::with('childrenRecursive')->whereNull('parent_id')->get();
        return view('category')->with('categories', $categories);
    }

    public function create()
    {
        return view('product.add');
    }

    public function show(){
        return view('layouts\addproduct', [
            'categories' => Category::all()
        ]);
    }
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'active' => $request->active
        ]);
        $active['active'] = $request->active;
        $product->categories()->attach($request->category_id,$active);
        return redirect('/');
    }

}
