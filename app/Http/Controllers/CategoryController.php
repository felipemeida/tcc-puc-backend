<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Page;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $category = new Category();
        $categories = $category->all();
        return view('painel.category.index', compact(['categories']));
    }

    public function create()
    {
        $categoryTypes = $this->categoryTypes();
        return view('painel.category.create', compact('categoryTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'color' => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
            'type' => 'required',
        ]);

        $category = new Category();
        $category->fill($request->all());
        $category->save();

        $categories = Category::all();
        return view('painel.category.index', compact(['categories']))->with('message', 'Conteúdo criado!');
    }

    public function edit(Request $request, $id)
    {
        $categoryTypes = $this->categoryTypes();
        $category = Category::find($id);
        return view('painel.category.edit', compact('category', 'categoryTypes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'color' => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
            'type' => 'required',
        ]);

        $category = Category::find($id);
        $category->fill($request->all());
        $category->save();

        $categories = Category::all();
        return view('painel.category.index', compact(['categories']))->with('message', 'Conteúdo atualizado');
    }

    public function destroy(Request $request, $id)
    {
        $category = Category::find($id);
        $category->delete();

        $categories = Category::all();
        return view('painel.category.index', compact(['categories']))->with('message', 'Categoria deletada');
    }

    public function categoryTypes(): array
    {
        return [
            'blog' => "Blog",
            'product' => 'Produto',
            'book' => 'Livro'
        ];
    }
}
