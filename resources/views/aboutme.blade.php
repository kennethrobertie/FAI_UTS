@extends('layout.main')

@section('konten')
    <h1>Kuliah Laravel</h1>
    <h2>Nama : {{ $nama }}</h2>

    <table>
        <thead>
            <tr>
                <th>NRP</th>
                <th>Nama</th>
                <th>IPK</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ruangkelas as $mhs)
                <tr>
                    <td>{{ $mhs['nrp'] }}</td>
                    <td>{{ $mhs['nama'] }}</td>
                    <td>{{ $mhs['ipk'] }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
