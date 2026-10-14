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
    <form method="post" action="{{ url('tutordb') }}">
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
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <select name="genre_id" class="form-control">
                @foreach ($daftarGenre as $genre)
                    <option value="{{ $genre->genre_id }}">
                        {{ $genre->genre_nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Author</label>
            <input type="text" class="form-control" name="author">
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun</label>
            <input type="text" class="form-control" name="tahun">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    {{-- @dump($daftarBuku) --}}

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama Buku</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Genre Nama</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            {{-- http://localhost:8000/tutorform/buku --}}
            @if (null !== $daftarBuku)
                @foreach ($daftarBuku as $buku)
                    <tr>
                        <td>{{ $buku->title }}</td>
                        <td>{{ $buku->tahun }}</td>
                        <td>{{ $buku->Genre->genre_nama }}</td>
                        <td>
                            <a href={{ url("tutordb/$buku->id") }} class="btn btn-primary">Ubah</a>

                            <form method="POST" action={{ url("/tutordb/$buku->id") }}>
                                @method('DELETE')
                                @if ($buku->trashed())
                                    <button type="submit" class="btn btn-success">Restore</button>
                                @else
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                @endif
                            </form>

                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
