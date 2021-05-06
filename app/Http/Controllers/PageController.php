<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $page = new Page();
        $pages = $page->all();
        return view('painel.pages.index', compact(['pages']));
    }

    public function edit($id)
    {
        $page = new Page();
        $page = $page->find($id);
        return view('painel.pages.edit', compact(['page']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'objective' => 'required',
            'value' => 'required',
        ]);

        $page = Page::find($id);
        $page->fill($request->all());
        $page->save();

        $page = new Page();
        $pages = $page->all();
        return view('painel.pages.index', compact(['pages']))->with('message', 'Conteúdo atualizado');
    }
}
