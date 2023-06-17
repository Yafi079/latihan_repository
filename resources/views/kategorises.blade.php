
{{-- @dd($postingan) --}}

@extends('layouts.main')
@section('container')
<h1>{{ $tittle }}</h1>

<div class="contaner">
    <div class="row">
        @foreach ($kategoris_banyak as $item)
            
        {{-- <div class="position-absolute  p-1" style="background-color :rgba(12, 12, 11, 0.648)"><a href="/kategoris/{{ $asu->category->slug }}"  class="text-decoration-none text-white"> {{ $asu->category->name }}</a></div> --}}
        
        <div class="col-md-3">
            <a href="/kategoris/{{ $item->slug }}" >
            <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/500x600?{{ $item->name }}" class="card-img" alt="{{ $item->name }}">
                <div class="card-img-overlay d-flex align-items-center p-0" >
                  <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(12, 11, 11, 0.642)">{{ $item->name }}</h5>
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
    {{-- {{-- @foreach ($kategoris_banyak as $asu)
        
   <ul>
<li>

    <h1><a href="/kategoris/{{ $asu->slug }}">{{ $asu->name }}</a></h1>
</li>

   </ul> 



@endforeach --}}


{{-- <?php
// tunggal/{{ $post["slug"] }"
?> --}}


@endsection



