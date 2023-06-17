
{{-- @dd($postingan) --}}

@extends('layouts.main')
@section('container')
<h1 class="mb-3 text-center">{{ $tittle }} BY {{ $by }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/blog">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit" >Search</button>
      </div>
    </form>
  </div>
</div>

@if($post->count())

<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $post[0]->category->name }}" class="card-img-top" alt="KOSONG">
    <small>
    <div class="card-body text-center">
      <h5 class="card-title"><a href="/blog/{{ $post[0]->slug }}"  class="text-decoration-none text-dark">{{ $post[0]->title }}</a></h5>
     
      <p>BY <a href="/author/{{ $post[0]->author->username }}" class="text-decoration-none">{{ $post[0]->author->name}}</a>
        <a href="/kategoris/{{ $post[0]->category->slug }}"> {{ $post[0]->category->name }} </a></a> {{ $post[0]->created_at->diffForHumans() }}</p>
    </small>
      <p class="card-text">{{ $post[0]->excerpt }}</p>

      <a href="/blog/{{ $post[0]->slug }}" class="text-decoration-none">Read More....</a>
    </div>
  </div>

 

  <div class="container">
    <div class="row">
        @foreach ($post->skip(1) as $asu)
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                    <div class="position-absolute  p-1" style="background-color :rgba(12, 12, 11, 0.648)"><a href="/kategoris/{{ $asu->category->slug }}"  class="text-decoration-none text-white"> {{ $asu->category->name }}</a></div>
                <img src="https://source.unsplash.com/300x200?{{ $asu->category->name }}" class="card-img-top" alt="TIDAK ADA">
                <div class="card-body">
                    <small>
                    BY. <a href="/author/{{ $asu->author->username }}" class="text-decoration-none text-dark">{{ $asu->author->name}}</a>.  {{ $asu->created_at->diffForHumans() }}
                    </small>
                  <h5 class="card-title"><a href="/blog/{{ $asu->slug }}"  class="text-decoration-none">{{ $asu->title }}</a></h5>
                  <p class="card-text">{{ $asu->excerpt }}</p>
                  
                  <a href="/blog/{{ $asu->slug }}" class="btn btn-primary" class="text-decoration-none">Read More....</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
  </div>
    {{-- @foreach ($post->skip(1) as $asu)
        
   
<article class="mb-5 border-bottom pb-4">

<h4><a href="/blog/{{ $asu->slug }}"  class="text-decoration-none">{{ $asu->title }}</a></h4>

<h4>BY <a href="/author/{{ $asu->author->username }}" class="text-decoration-none">{{ $asu->author->name}}</a>   <br> Tema<a href="/kategoris/{{ $asu->category->slug }}" class="text-decoration-none"> {{ $asu->category->name }}</a></h4>
<p>{{ $asu->excerpt }}</p>

<a href="/blog/{{ $asu->slug }}" class="text-decoration-none">Read More....</a>

</article>
@endforeach --}}


{{-- <?php
// tunggal/{{ $post["slug"] }"
?> --}}
 @else 
 <p class='card-text fs-4 text-center' style="color
 :red">POST TIDAK DITEMUKAN</p>
 @endif


 {{-- {{ $post ->links()}} --}}
@endsection



