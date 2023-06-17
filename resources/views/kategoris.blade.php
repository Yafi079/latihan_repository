
{{-- @dd($postingan) --}}

@extends('layouts.main')
@section('container')
<h1>Post Category : {{ $categori }}</h1>
    @foreach ($blog as $asu)
        
   <ul>
<li>

    <h1><a href="/blog/{{ $asu->slug }}">{{ $asu->title }}</a></h1>
    <p>{{ $asu->excerpt }}</p>
</li>

   </ul>



@endforeach



{{-- <?php
// tunggal/{{ $post["slug"] }"
?> --}}


@endsection



