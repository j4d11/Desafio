<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ControllerProducts extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    public function create()
{
    $categories = Category::all(); // Renomeei para "categories" no plural
    return view('products.create', compact('categories'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'category_id' => 'required|exists:categories,id',
    ]);

    Product::create($validated);

    return redirect('/products');
}

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect('/products');
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect('/products');
    }
}
