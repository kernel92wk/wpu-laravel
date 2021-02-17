@extends('layout/main')

@section('title', 'Dafar Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Daftar Mahasiswa</h1>
            <table class="table">
                <tr>
                <thead class="bg-dark text-white">
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mhs->nama}}</td>
                        <td>{{ $mhs->nim}}</td>
                        <td>{{ $mhs->email}}</td>
                        <td>{{ $mhs->jurusan}}</td>
                        <td>
                            <a href="" class="badge bg-success">edit</a>
                            <a href="" class="badge bg-danger">hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection