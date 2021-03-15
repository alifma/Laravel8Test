@extends('layout.v_template')
@section('title', 'Guru')
@section('content')
    <div>
        {{-- <h1>Halaman Guru</h1> --}}
        {{-- {{ dd($guru)}} --}}
        @foreach ($guru as $data)
            <h1>Nama : {{$data['nama']}}</h1>
            <h1>NIM : {{$data['nim']}}</h1>
        @endforeach
    </div>
@endsection
