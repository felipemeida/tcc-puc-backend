<?php

use App\Http\Resources\BookCollection;
use App\Http\Resources\PageCollection;
use App\Http\Resources\PostCollection;
use App\Http\Resources\ProductCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Book;
use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use App\Models\Product;

//Route::get('/book/{id}', function ($id) {
//    return BookResource(Book::findOrFail($id));
//});
//
//Route::get('/category/{id}', function ($id) {
//    return new BookResource(Category::findOrFail($id));
//});


Route::get('/post/{id}', function ($id) {
    return new PostCollection(Post::findOrFail($id));
});
Route::get('/posts', function () {
    return PostCollection::collection(Post::orderByDesc('id')->paginate(10));
});

Route::get('/product/{id}', function ($id) {
    return new ProductCollection(Product::findOrFail($id));
});
Route::get('/products', function () {
    return ProductCollection::collection(Product::orderByDesc('id')->get());
});

Route::get('/book/{id}', function ($id) {
    return new BookCollection(Book::findOrFail($id));
});
Route::get('/books', function () {
    return BookCollection::collection(Book::orderByDesc('id')->paginate(10));
});

Route::get('/pages', function () {
    return PageCollection::collection(Page::all());
});

Route::post('/page/view', [App\Http\Controllers\ViewController::class, 'pageView'])->name('post.index');



