@extends('layout.v_template')
@section('title', 'Add New Guru')
@section('content')
<form action="/guru/insert" method="post" enctype="multipart/form-data">
    @csrf
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="">NIM</label>
                    <input type="text" name="nim" class="form-control" value="{{old('nim')}}">
                    <div class="invalid-feedback">
                        @error('nim')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{old('nama')}}">
                    <div class="invalid-feedback">
                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Mata Pelajaran</label>
                    <input type="text" name="mapel" class="form-control" value="{{old('mapel')}}">
                    <div class="invalid-feedback">
                        @error('mapel')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="image" class="form-control" value="{{old('image')}}">
                    <div class="invalid-feedback">
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-sm btn-success"> Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
