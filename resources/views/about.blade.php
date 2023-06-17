
@extends('layouts.main')
@section('container')
    <h1>ABOUT</h1>
    <p>{{ $nama }}</p>
    <p>{{ $nrp }}</p>
    <p>{{ $email }}</p>
    <p>{{ $tanggal }}</p>
    <img src="img/{{ $gambar }}" alt="INI ADALAH FOTO PENGUKUHAN YAFI" width="200">
@endsection
