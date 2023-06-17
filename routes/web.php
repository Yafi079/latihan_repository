<?php

use App\Http\Controllers\POSTcontroller;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        "tittle" => "HOME",
        "active" => "HOME",
        "encode" => "encode.png"
    ]);
});

Route::get('/about', function () {
    return view(
        'about',
        [
            "tittle" => "ABOUT",
            "active" => "ABOUT",
            "nama" => "Muhammad Yafi",
            "email" => "muhammadyafinegsaboy@gmail.com",
            "nrp" => "5026211079",
            "tanggal" => "21 september 2003",
            "gambar" => "yafi.jpeg"

        ]


    );
});


Route::get('/blog', [POSTcontroller::class, 'index']);
Route::get('blog/{post:slug}', [POSTcontroller::class, "lihat"]);

Route::get('/kategoris/{category:slug}', function (Category $category) {
    return view('blog', [
        'by' => $category->name,
        'active' => 'BLOG',
        'tittle' => 'CATEGORY POST',
        'post' => $category->posting->load('category', 'author'),
        'categori' => $category->name
    ]);
});
Route::get(
    '/kategorises',
    function () {

        return view('kategorises', [
            'tittle' => 'POST KATEGORI ALL',
            'active' => 'KATEGORISES',
            'kategoris_banyak' => Category::all()
        ]);
    }
);

// Route::get(
//     '/author/{author:username}',
//     function (User $author) {
//         return view('blog', [
//             'tittle' => 'AUTHOR POST',
//             'title' => 'AUTHOR POST',
//             'post' => $author->posts
//         ]);
//     }

// );
Route::get('/author/{babi:username}', function (User $babi) {
    return view('blog', [
        'by' => $babi->name,
        'active' => 'BLOG',
        'tittle' => 'AUTHOR POST',
        'post' => $babi->posts->load('author', 'category')
    ]);
});
