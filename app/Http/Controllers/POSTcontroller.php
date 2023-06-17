<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Post;

class POSTcontroller extends Controller
{
    public function index()
    {




        return view('blog', [
            "tittle" => "BLOG POST",
            "active" => 'BLOG',
            "by" => 'ALL',
            "post" => POST::with('category', 'author')->latest()->filter(request(['search']))->get()
        ]);
    }

    public function lihat(Post $post)
    {

        return view(
            'blogtunggal',
            [
                "tittle" => "single blog",
                "active" => "BLOG",
                // ["penulis"=>"YAFI"],
                "blogtunggal" => $post

            ]
        );
    }
}
