@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('update',[$data->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="Text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="exampleFormControlInput1" value="{{old('nama',$data->nama)}}">
            @error('nama')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="exampleFormControlInput1" value="{{old('tanggal',$data->tanggal)}}">
            @error('tanggal')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Asal Sekolah</label>
            <input type="Text" name="asalsekolah" class="form-control @error('asalsekolah') is-invalid @enderror" id="exampleFormControlInput1" value="{{old('asalsekolah',$data->asalsekolah)}}">
            @error('asalsekolah')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Alamat</label>
            <input type="Text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="exampleFormControlInput1" value="{{old('alamat',$data->alamat)}}">
            @error('alamat')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror 
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Gambar</label><br>
        <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
        @error('gambar')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success">Update</button>
            <a href="/home" class="btn btn-primary ">Kembali</a>
        </div>
    </form>
</div>
@endsection
