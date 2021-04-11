<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Couchbase\defaultDecoder;

class ProductController extends Controller
{
    public function index()
    {
        $product = new Product();
        $products = $product->all();
        return view('painel.product.index', compact(['products']));
    }

    public function create()
    {
        $categories = Category::where('type', 'product')->get();
        return view('painel.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'description' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'category_id' => 'required|integer',
            'photo' => 'required'
        ]);

        $path = $request->file('photo')->store('products');

        $product = new Product();
        $product->fill($request->all());
        $product->photo = $path;
        $product->save();

        return redirect()->route('product.index')->with('message', 'Produto atualizado');
    }

    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
        $categories = Category::where('type', 'product')->get();

        return view('painel.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'description' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'category_id' => 'required|integer',
            'photo' => 'required'
        ]);

        $path = $request->file('photo')->store('products');

        $product = Product::find($id);
        $product->fill($request->all());
        $product->photo = $path;
        $product->save();

        return redirect()->route('product.index')->with('message', 'Produto atualizado');
    }

    public function destroy(Request $request, $id)
    {
        $category = Product::find($id);
        $category->delete();

        return redirect()->route('product.index')->with('message', 'Produto deletado');
    }
}
