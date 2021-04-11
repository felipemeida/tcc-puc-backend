<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $postCount = Post::count();
        $bookCount = Book::count();
        $categoryCount = Category::count();
        $productCount = Product::count();
        $viewCount = View::sum('views');
        $views = View::orderByDesc('views')->limit(6)->get();
        return view('home', compact(['postCount', 'bookCount', 'categoryCount', 'productCount', 'views', 'viewCount']));
    }
}
