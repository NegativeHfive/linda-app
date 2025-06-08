<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function showAddForm(){
        return view('add');
    }
    
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'nullable',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('products', 'public');
    }

    Product::create([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'image' => $imagePath,
    ]);

    return redirect('/add')->with('success', 'Product added!');
}

    public function index(){
        $products = Product::all();
        return view('shop' , compact('products'));
    }

    public function show($id)
{
    $product = Product::findOrFail($id);
    return view('product', compact('product'));
}
}
