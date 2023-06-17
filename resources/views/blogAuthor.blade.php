
{{-- @dd($postingan) --}}

@extends('layouts.main')
@section('container')
<h1>BLOG</h1>

    @foreach ($postAja   as $asu)
        
   
<article class="mb-5 border-bottom pb-4">

<h4><a href="/blog/{{ $asu->slug }}"  class="text-decoration-none">{{ $asu->title }}</a></h4>
<h4>BY <a href="/author/{{ $asu->author->username }}" class="text-decoration-none">{{ $asu->author->name}}</a>   <br> Tema<a href="/kategoris/{{ $asu->category->slug }}" class="text-decoration-none"> {{ $asu->category->name }}</a></h4>
<p>{{ $asu->excerpt }}</p>

</article>
@endforeach


{{-- <?php
// tunggal/{{ $post["slug"] }"
?> --}}


@endsection



