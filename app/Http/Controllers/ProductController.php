<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('products.index', compact('products'));
    }

    public function create()
    {

        return view('products.create', [
            'mode' => 'create',
            'product' => new Product(),

        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        Product::create($data);
        return redirect()->route('products.index')->with('success', 'Successfully created!');
    }

    public function show(Product $product)
    {
        return view('products.view', compact('product'));
    }

    public function edit(Product $product)
    {

        return view('products.edit', [
            'mode' => 'edit',
            'product' => $product,

        ]);
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->all();
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('uploads', 'public');
        }
        $product->update($data);
        return redirect()->route('products.index')->with('success', 'Successfully updated!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Successfully deleted!');
    }
}