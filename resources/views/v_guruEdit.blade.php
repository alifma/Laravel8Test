@extends('layout.v_template')
@section('title', 'Edit Data Guru')
@section('content')
<form action="/guru/update/{{$guru->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">NIM</label>
                    <input type="text" name="nim" class="form-control" value="{{$guru->nim}}" readonly>
                    <div class="invalid-feedback">
                        @error('nim')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{$guru->nama}}">
                    <div class="invalid-feedback">
                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Mata Pelajaran</label>
                    <input type="text" name="mapel" class="form-control" value="{{$guru->mapel}}">
                    <div class="invalid-feedback">
                        @error('mapel')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-6">
                        <img src="{{url('img/'.$guru->image)}}" class="img-fluid" style="width:100px" alt="" srcset="">
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" name="image" class="form-control" value="{{old('image')}}">
                            <div class="invalid-feedback">
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group pt-5 mt-5">
                    <button class="btn btn-sm btn-success"> Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
