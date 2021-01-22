<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index')->with([
            'products' => Product::all(),
        ]);
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => ['required', 'max:255'],
            'price' => ['required', 'integer', 'min:1', 'max:500'],
        ];

        $request->validate($rules);

        $product = Product::create($request->all());

        return redirect()->route('products.index')
            ->withSuccess("El producto {$product->title} se creó con éxito");
    }

    public function show(Product $product)
    {
        return view('products.show')->with([
            'product' => $product,
        ]);
    }

    public function edit(Product $product)
    {
        return view('products.edit')->with([
            'product' => $product,
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $product->fill($request->all());

        $product->save();

        return redirect()->route('products.index')
            ->withSuccess("El producto {$product->title} se editó con éxito");
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->withSuccess("El producto {$product->title} se editó con éxito");
    }
}
