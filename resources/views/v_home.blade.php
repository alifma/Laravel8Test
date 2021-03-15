@extends('layout.v_template')
@section('title', 'Home')
@section('content')
    <div>
        <h1>Halaman Home</h1>
        <div class="text-center">
            <h2>{{$nama}}</h2>
            <h2>{{$alamat}}</h2>
        </div>
    </div>
@endsection
