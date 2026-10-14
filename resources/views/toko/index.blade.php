@extends('layout.main')

@section('konten')
    <h1>Halo ini toko, {{ $toko->toko_nama }}</h1>
    <h4>Owner : {{ $user->username }}</h4>

    <hr>

    <h3>Tambah Buku ke Toko</h3>
    <form action="{{ url('toko/proses') }}" method="POST">
        @csrf
        {{-- TOKO ID DISELIPKAN DISINI, UNTUK DIKIRIM KE CONTROLLER --}}
        <input type="hidden" name="toko_id" value="{{ $toko->toko_id }}">

        Pilih Buku :
        <select name="id" id="">
            @foreach ($daftarBuku as $book)
                <option value="{{ $book->id }}">{{ $book->title }}</option>
            @endforeach
        </select>
        <br>
        Masukan Stok Buku :
        <input type="text" name="tb_stok" id="">
        <br>
        <input type="submit" value="Tambahkan buku ke toko">
    </form>


    <table class="table table-dark">
        <thead>
            <tr>
                <th>TB_ID</th>
                <th>Nama buku</th>
                <th>Genre</th>
                <th>Stok</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($toko->Books as $book)
                <tr>
                    <td>{{ $book->aliaspivot->tb_id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->Genre->genre_nama }}</td>
                    <td>{{ $book->aliaspivot->tb_stok }}</td>
                    <td>
                        <a href="{{ url("toko/hapus/$toko->toko_id/$book->id") }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @empty
                {{-- kalau arraynya saya KOSONG apa yang mau ditampilkan --}}
                <tr>
                    <td colspan="5">Toko masih belum punya buku apapun</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
