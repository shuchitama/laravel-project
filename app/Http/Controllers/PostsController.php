<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function show($slug)

    {
        $post = DB::table('posts')-> where('slug', $slug)->first();

        if(! $post) {
            abort(404);
        }

        return view('test', [
            'post' => $post
        ]);
    }
}