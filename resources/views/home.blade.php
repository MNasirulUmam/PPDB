@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->
                <a href="{{route('create')}}" type="button" class="btn btn-success">Tambah Siswa</a>
                <br><br>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Asal Sekolah</th>
                    <th scope="col">Alamat</th>
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
                    <td><a href="{{route('show',[$data->id])}}" type="button" class="btn btn-primary">Show</a></td>
                    </tr>
                </tbody>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
