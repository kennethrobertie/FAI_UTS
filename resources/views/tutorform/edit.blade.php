@extends('layout.main')

@section('pesanpesan')
    @if ($errors->any())
        @foreach ($errors->all() as $pesanError)
            <div>{{ $pesanError }}</div>
        @endforeach
    @endif
@endsection

@section('konten')
    <h1>Edit Buku</h1>
    <form method="post" action="{{ url("tutorform/buku/$idyangdiubah") }}">
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nama Buku</label>

            <input type="text" class="form-control" name="buku_nama" 
            @error('buku_nama')
                style="border:2px solid red;"
            @enderror 
            value="{{ $datalama['buku_nama'] }}">

            @error('buku_nama')
                <div style="font-weight:bold;color:red;">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit" value="{{ $datalama['tahun_terbit'] }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

