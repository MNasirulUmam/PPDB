@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin Delete Permanen ?');">Delete All</a>
            <a href="" class="btn btn-outline-success">Restore All</a>
            <a href="" class="btn btn-outline-primary">Kembali</a>
            <div class="card">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datas as $data)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->tanggal}}</td>
                    <td>{{$data->asalsekolah}}</td>
                    <td>{{$data->alamat}}</td>
                    <td class="text-center">
                        <img src="{{ Storage::url('public/image/').$data->gambar }}" class="rounded" style="width: 150px">
                    </td>
                    <td>
                        <a href="{{route('edit',[$data->id])}}" type="submit" class="btn btn-primary">Edit</a>
                        <a href="{{route('delete',[$data->id])}}" type="button" class="btn btn-danger" onclick="return confirm('yakin hapus data ?');">Delate</a>
                    </td>
                    </tr>
                </tbody>
                @endforeach
                </table>
                {{$datas->links()}}
            </div>
        </div>
    </div>
</div>
@endsection