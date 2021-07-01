@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{route('update',[$data->id])}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama</label>
        <input type="Text" name="nama" class="form-control" id="exampleFormControlInput1" value="{{$data->nama}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" id="exampleFormControlInput1" value="{{$data->tanggal}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Asal Sekolah</label>
        <input type="Text" name="asalsekolah" class="form-control" id="exampleFormControlInput1" value="{{$data->asalsekolah}}">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Alamat</label>
        <input type="Text" name="alamat" class="form-control" id="exampleFormControlInput1" value="{{$data->alamt}}">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('delete',[$data->id])}}" class="btn btn-danger">Delete</a>
    </div>
</form>
</div>
@endsection