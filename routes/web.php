<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home', ['title' => 'home page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Shafwan Junindra', 'title' => 'About Page']);
});

// Buat 2 Eoute Baru
// Blog
// Contact


// Blog
// rute posts untuk nampilin semua artikel
Route::get('/posts', action: function () {
    // Eager Loading
    // jadi author gak lagi Lazy Loading tapi eager Loading
    // $posts = Post::with(['author', 'category'])->latest()->get();

    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Blog Page', 'posts' => $posts]);
});

// rute post yang singular untuk menampilkan setiap data post
Route::get('/posts/{post:slug}', function(Post $post) {
  ;  $posts = Post::all();

        // akses variable id dari global pakai kata kunci use
        // $post = Post::find($id);

        return view('post', ['title' => 'single post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user) {
  
          // akses variable id dari global pakai kata kunci use
          // $post = Post::find($id);

        //   $posts = $user->posts->load('category', 'author');
  
          return view('posts', ['title' => count($user->posts) . ' Artikel By ' . $user->name, 'posts' => $user->posts]);
  });

Route::get('/categories/{category:slug}', function(Category $category) {
  
          // akses variable id dari global pakai kata kunci use
          // $post = Post::find($id);

        //   $posts = $category->posts->load('category', 'author');
  
          return view('posts', ['title' =>  'Article in Category : ' . $category->name, 'posts' => $category->posts]);
  });

// Contact
Route::get('/contact', function() {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/product', function() {
    return view('product', ['title' => 'Product Page']);
});

Route::get('/features', function() {
    return view('features', ['title' => 'Features Page']);
});

Route::get('/marketplace', function() {
    return view('marketplace', ['title' => 'Marketplace Page']);
});

Route::get('/company', function() {
    return view('company', ['title' => 'Company Page']);
});

