<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function create()
    {
        return view('Frmproducts');
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->amount = $request->amount;
        $product->brand = $request->brand;
        $product->model = $request->model;
        $product->measurements = $request->measurements;
        $product->trademark = $request->trademark;
        $product->catproductos_id = $request->catproductos_id;
        $product->save();
        return redirect()->route('product.index');
    }

    public function index()
    {
        $products = Product::orderBy('idproduct', 'asc')->get();
        return view('product.list', compact('products'));
    }
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->amount = $request->amount;
        $product->brand = $request->brand;
        $product->model = $request->model;
        $product->measurements = $request->measurements;
        $product->trademark = $request->trademark;
        $product->catproductos_id = $request->catproductos_id;
        $product->save();
        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
