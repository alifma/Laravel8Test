@extends('layout.v_template')
@section('title', 'Guru')
@section('content')
@if (session('pesan'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Alert!</h4>
        {{session('pesan')}}
    </div>
@endif
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
                <a href='/guru/edit/{{$data->id}}'  class="btn-sm btn btn-warning"> Edit </a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->id}}">
                    Delete
                  </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@foreach ($guru as $data)
<div class="modal modal-danger fade" id="delete{{$data->id}}">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">{{$data->nama}}</h4>
        </div>
        <div class="modal-body">
          <p>Yakin ingin menghapus data ini?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
          <a href="/guru/delete/{{$data->id}}" type="button" class="btn btn-outline">Confirm</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
@endforeach

@endsection
