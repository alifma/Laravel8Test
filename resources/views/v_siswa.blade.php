@extends('layout.v_template')
@section('title', 'Siswa')
@section('content')
    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Mapel</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                @foreach ($siswa as $data)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$data->nisn}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->mapel}}</td>
                    <td>{{$data->kelas}}</td>
                    {{-- <td><img src="{{url('img/'.$data->image)}}" alt="" class="img-fluid" style="height:100px" srcset=""></td> --}}
                    {{-- <td></td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
