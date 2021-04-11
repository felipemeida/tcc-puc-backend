<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::prefix('painel')->group(function () {
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('paginas')->group(function () {
        Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('pages.index');
        Route::get('/{id}', [App\Http\Controllers\PageController::class, 'edit'])->name('pages.edit');
        Route::put('/{id}', [App\Http\Controllers\PageController::class, 'update'])->name('pages.update');
    });

    Route::prefix('categorias')->group(function () {
        Route::get('/', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
        Route::get('/cadastrar', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
        Route::post('/', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
        Route::get('/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
        Route::put('/{id}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
        Route::delete('/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');
    });

    Route::prefix('produtos')->group(function () {
        Route::get('/', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
        Route::get('/cadastrar', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
        Route::post('/', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
        Route::get('/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
        Route::put('/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
        Route::delete('/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');
    });

    Route::prefix('livros')->group(function () {
        Route::get('/', [App\Http\Controllers\BookController::class, 'index'])->name('book.index');
        Route::get('/cadastrar', [App\Http\Controllers\BookController::class, 'create'])->name('book.create');
        Route::post('/', [App\Http\Controllers\BookController::class, 'store'])->name('book.store');
        Route::get('/{id}', [App\Http\Controllers\BookController::class, 'edit'])->name('book.edit');
        Route::put('/{id}', [App\Http\Controllers\BookController::class, 'update'])->name('book.update');
        Route::delete('/{id}', [App\Http\Controllers\BookController::class, 'destroy'])->name('book.delete');
    });

    Route::prefix('postagens')->group(function () {
        Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
        Route::get('/cadastrar', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
        Route::post('/', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
        Route::get('/{id}', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
        Route::put('/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post.update');
        Route::delete('/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.delete');
    });

    Route::prefix('usuarios')->group(function () {
        Route::get('/', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
        Route::get('/cadastrar', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
        Route::post('/', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
        Route::get('/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
        Route::put('/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
        Route::delete('/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('user.delete');
    });

    Route::prefix('visualizacoes')->group(function () {
        Route::get('/', [App\Http\Controllers\ViewController::class, 'index'])->name('view.index');
        Route::delete('/{id}', [App\Http\Controllers\ViewController::class, 'destroy'])->name('view.delete');
    });

//    Route::get('postagens', [App\Http\Controllers\HomeController::class, 'index'])->name('post');
//
//    Route::get('postagens', [App\Http\Controllers\HomeController::class, 'index'])->name('post');
//    Route::get('postagens', [App\Http\Controllers\HomeController::class, 'index'])->name('post');
});

