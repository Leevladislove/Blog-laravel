<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;


Route::prefix('admin')->middleware('active', 'admin')->group(function () {
    Route::redirect('/', '/admin/posts')->name('admin');

    Route::get('posts', [PostController::class, 'index'])->name('admin.posts');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show')->whereNumber('post');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit')->whereNumber('post');
    Route::put('posts/{post}', [PostController::class, 'update'])->name('admin.posts.update')->whereNumber('post');
    Route::delete('posts/{post}', [PostController::class, 'delete'])->name('admin.posts.delete')->whereNumber('post');
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('admin.posts.like')->whereNumber('post');
});
