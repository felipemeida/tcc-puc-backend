<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\View;
use Illuminate\Http\Request;
use function Couchbase\defaultDecoder;

class ViewController extends Controller
{
    public function pageView(Request $request)
    {
        $request->validate(['link' => ['required', 'max:255']]);
        $view = new View();
        $viewResult = $view->where('link', $request['link'])->get();
        if ($viewResult->isEmpty()) {
            $view = new View();
            $view->link = $request['link'];
            $view->views = 1;
            $view->save();
        } else {
            $view = View::find($viewResult->first()->id);
            $view->views = $view->views + 1;
            $view->save();
        }
    }

    public function index()
    {
        $views = View::all();
        return view('painel.view.index', compact(['views']));
    }

    public function destroy(Request $request, $id)
    {
        $view = View::find($id);
        $view->delete();

        return redirect()->route('view.index')->with('message', 'Página deletada');
    }
}
