@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswas as $mahasiswa)
                <tr>
                    <td> { { $mahasiswa->id } } </td>
                    <td> { { $mahasiswa->nama } } </td>
                    <td> { { $mahasiswa->alamat } } </td>
                    <td> { { $mahasiswa->tanggal_lahir } } </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection