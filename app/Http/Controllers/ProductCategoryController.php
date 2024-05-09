<?php

namespace App\Http\Controllers;

use App\Models\Product_Category;

use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    //
    public function create()
    {
        return view('Frmproduct_categories');
    }

    public function store(Request $request)
    {
        $product_category = new Product_category;
        $product_category->name = $request->name;
        $product_category->description = $request->description;
        $product_category->save();
        return redirect()->route('product_category.index');
    }
    public function index()
    {
        $product_category = Product_category::orderBy('idproduct_category', 'asc')->get();
        return view('product_category.list', compact('product_categores'));
    }
    public function show(Product_category $product)
    {
        return view('product_category.show', compact('product_category'));
    }
    public function edit(Product_category $product_category)
    {
        return view('product_category.edit', compact('product_category'));
    }

    public function update(Request $request, Product_category $product_category)
    {
        $product_category->name = $request->name;
        $product_category->description = $request->description;
        $product_category->save();
        return redirect()->route('product_category.index');
    }

    public function destroy(Product_category $product_category)
    {
        $product_category->delete();
        return redirect()->route('product_category.index');
    }
}
