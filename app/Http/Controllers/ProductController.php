<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
       // $products = Product::all(); //fetch all products from DB
       // $categories = Category::with('childrenRecursive')->whereNull('parent_id')->get();
       $categories = Category::with('childrenRecursive')->whereNull('parent_id')->get();
        return view('welcome')->with('categories', $categories);
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
