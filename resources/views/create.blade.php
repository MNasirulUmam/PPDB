@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="Text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" id="exampleFormControlInput1">
        @error('nama')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}" id="exampleFormControlInput1">
        @error('tanggal')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Asal Sekolah</label>
        <input type="text" name="asalsekolah" class="form-control @error('asalsekolah') is-invalid @enderror" value="{{ old('asalsekolah') }}" id="exampleFormControlInput1">
        @error('asalsekolah')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" id="exampleFormControlInput1">
        @error('alamat')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Gambar</label><br>
        <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value="{{ old('gambar') }}" id="exampleFormControlInput1">
        @error('gambar')
        <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/home" class="btn btn-primary">Kembali</a>
    </div>
</form>
</div>
@endsection