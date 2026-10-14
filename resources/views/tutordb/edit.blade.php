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
    <h1>Edit Buku</h1>
    <form method="post" action="{{ url("tutordb/$dataLama->id") }}">
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{ $dataLama->title }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" name="price" value="{{ $dataLama->price }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <select name="genre_id" class="form-control">
                @foreach ($daftarGenre as $genre)
                    <option value="{{ $genre->genre_id }}" @if ($genre->genre_id == $dataLama->genre_id) selected @endif>
                        {{ $genre->genre_nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Author</label>
            <input type="text" class="form-control" name="author" value="{{ $dataLama->author }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun</label>
            <input type="text" class="form-control" name="tahun" value="{{ $dataLama->tahun }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
