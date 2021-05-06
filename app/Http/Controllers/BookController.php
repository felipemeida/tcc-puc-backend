<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use Barryvdh\DomPDF\Facade as PDF;
use http\Env\Response;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class BookController extends Controller
{
    public function index()
    {
        $book = new Book();
        $books = $book->all();
        return view('painel.book.index', compact('books'));
    }

    public function create()
    {
        $categories = Category::where('type', 'book')->get();
        return view('painel.book.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'category_id' => 'required|integer',
            'photo' => 'required'
        ]);

        $path = $request->file('photo')->store('products');

        $book = new Book();

        $book->fill($request->all());
        $book->photo = $path;
        $book->save();

        return redirect()->route('book.index')->with('message', 'Livro atualizado');
    }

    public function edit(Request $request, $id)
    {
        $book = Book::find($id);

        $categories = Category::where('type', 'book')->get();
        return view('painel.book.edit', compact('book', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'author' => 'required',
            'category_id' => 'required|integer',
            'photo' => 'required'
        ]);

        $path = $request->file('photo')->store('products');

        $book = Book::find($id);
        $book->fill($request->all());
        $book->photo = $path;
        $book->save();

        return redirect()->route('book.index')->with('message', 'Livro atualizado');
    }

    public function destroy(Request $request, $id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('book.index')->with('message', 'Livro deletado');
    }

    public function get(Request $request, $id)
    {
        //return response()->json(['error' => false], 201);
//        $book = Book::find($id);
//        dd($id);
//        return $book->toJson();
    }

    public function pdf()
    {
        $book = new Book();
        $books = $book->all();

        $data = [
            'books' => $books
        ];

        $pdf = PDF::loadView('painel.book.pdf', $data);
        return $pdf->download('book.pdf');
    }
}
