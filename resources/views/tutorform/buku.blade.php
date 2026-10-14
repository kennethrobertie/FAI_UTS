@extends('layout.main')

@section('pesanpesan')
    @if ($errors->any())
        @foreach ($errors->all() as $pesanError)
            <div>{{ $pesanError }}</div>
        @endforeach
    @endif

    @if (null !== session('pesan'))
        {{ session('pesan') }}
    @endif
@endsection

@section('konten')
    {{-- 
        Untuk setup form submit:
        1. Wajib ada form dengan method dan action (file mana yang handle inputan)
        2. Input dengan type, value dan WAJIB ada name
        3. Tombol Submit
    --}}
    <form method="post" action="{{ url('tutorform/buku') }}">
        <div class="mb-3">
            <label class="form-label">Nama Buku</label>

            <input type="text" class="form-control" name="buku_nama"
                @error('buku_nama')
                style="border:2px solid red;"
            @enderror
                value="{{ old('buku_nama') }}">

            @error('buku_nama')
                <div style="font-weight:bold;color:red;">{{ $message }}</div>
            @enderror
        </div>
        {{-- 
        Harus dalam format BUK123
        --}}
        <div class="mb-3">
            <label class="form-label">Kode Buku</label>
            <input type="text" class="form-control" name="buku_kode">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" name="my_email">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control" name="katakunci">
        </div>
        <div class="mb-3">
            <label class="form-label">Konfirmasi Password</label>
            <input type="text" class="form-control" name="katakunci_confirmation">
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Pengarang</label>
            <input type="text" class="form-control" name="pengarang_nama">
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @dump($daftarBuku)

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama Buku</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- http://localhost:8000/tutorform/buku --}}
            @if (null !== $daftarBuku)
                @foreach ($daftarBuku as $index => $buku)
                    <tr>
                        <td>{{ $buku['buku_nama'] }}</td>
                        <td>{{ $buku['tahun_terbit'] }}</td>
                        <td>
                            <a href={{ url("tutorform/buku/$index") }} class="btn btn-primary">Ubah</a>
                            <form method="POST" action={{ url("/tutorform/buku/$index") }}>
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
