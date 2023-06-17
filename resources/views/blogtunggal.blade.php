

@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
        
            <h1 class="text-center mb-3">{{ $blogtunggal->title }}</h1>
            <img src="https://source.unsplash.com/1200x400?{{ $blogtunggal->category->name }}" class="img-fluid" alt="KOSONG">

           <h4 class="my-3">BY <a href="/author/{{ $blogtunggal->author->username }}" class="text-decoration-none">{{ $blogtunggal->author->name}}</a> in  <a href="/kategoris/{{ $blogtunggal->category->slug }}" class="text-decoration-none"> {{ $blogtunggal->category->name }}</a></h4>
           <article class="my-3 border-bottom pb-4 fs-5">
           <?=$blogtunggal->body ?>
        </article>
        <br>
            <a href="/blog" >back to blog</a>
        </div>
    </div>
</div>

@endsection
