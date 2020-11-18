<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('posts/{post}', function ($post) {
//     $posts = [
//         'my-first-post' => 'Hello, this is my first blog post!',
//         'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//     ];

//     if(! array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, that post was not found');
//     }
//     return view('test', [
//         'name' => $posts[$post] ?? 'nothing here yet'
//     ]);
// });


Route::get('/', function () {
  return view('welcome');
});

Route::get('/about', function () {
  
  return view('about', [
    'articles' => App\Models\Article::take(3)->latest()->get()
    ]);
  });
