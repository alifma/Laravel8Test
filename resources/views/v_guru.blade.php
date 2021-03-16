@extends('layout.v_template')
@section('title', 'Guru')
@section('content')
<a href="/guru/add" class="btn btn-primary">Add New Guru</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Mapel</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1 ?>
        @foreach ($guru as $data)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$data->nim}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->mapel}}</td>
            <td><img src="{{url('img/'.$data->image)}}" alt="" class="img-fluid" style="height:100px" srcset=""></td>
            <td>
                <a href='/guru/detail/{{$data->id}}' class="btn-sm btn btn-info"> Detail </a>
                <button class="btn-sm btn btn-warning"> Edit </button>
                <button class="btn-sm btn btn-danger"> Hapus </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
