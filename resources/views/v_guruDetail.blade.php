@extends('layout.v_template')
@section('title', 'Detail Guru')
@section('content')
    <div>
        <h1>Detail Guru</h1>
        <a href="/guru" class="btn-danger btn" >Kembali</a>
        <div class="card">
            <div class="card-body">
                <h3 class="font-weight-bold">Nama : {{$guru->nama}}</h3>
                <h3 class="font-weight-bold">NIM : {{$guru->nim}}</h3>
                <h3 class="font-weight-bold">Mapel : {{$guru->mapel}}</h3>
                <img src="{{url('img/'.$guru->image)}}" alt="">
            </div>
        </div>
    </div>
@endsection
