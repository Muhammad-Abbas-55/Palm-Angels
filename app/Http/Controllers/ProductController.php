<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
            'current_price' => 'required|numeric',
            'original_price' => 'required|numeric',
            'discount' => 'required|integer',
            'colors' => 'required|integer',
        ]);

        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Store in storage/app/public/products
                $path = $image->store('products', 'public'); // returns path like products/xyz.jpg
                $imagePaths[] = $path;
            }
        }

        Product::create([
            'name' => $request->name,
            'images' => json_encode($imagePaths),
            'current_price' => $request->current_price,
            'original_price' => $request->original_price,
            'discount' => $request->discount,
            'colors' => $request->colors,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'current_price' => 'required|numeric',
            'original_price' => 'required|numeric',
            'discount' => 'required|integer',
            'colors' => 'required|integer',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $imagePaths = json_decode($product->images, true) ?? [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('products', 'public'); // storage/app/public/products
                $imagePaths[] = $path;
            }
        }

        $product->update([
            'name' => $validated['name'],
            'current_price' => $validated['current_price'],
            'original_price' => $validated['original_price'],
            'discount' => $validated['discount'],
            'colors' => $validated['colors'],
            'images' => json_encode($imagePaths),
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted');
    }
}
