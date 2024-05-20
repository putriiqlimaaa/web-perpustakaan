@extends('dashboard.layouts.main')

@section('container')
<br>
<h2>Edit Data buku</h2>

<form action="/update_buku/{{ $buku->id }}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label>Kode:</label>
        <input type="text" name="kode" class="form-control" value="{{ $buku->kode }}" required/>
    </div>
    <div class="form-group">
        <label>Judul:</label>
        <input type="text" name="judul" class="form-control" value="{{ $buku->judul }}" required/>
    </div>
    <div class="form-group">
        <label>Penulis:</label>
        <input type="text" name="penulis" class="form-control" value="{{ $buku->penulis }}" required>
    </div>
    <div class="form-group">
        <label>penerbit:</label>
        <input type="text" name="penerbit" class="form-control" value="{{ $buku->penerbit }}" required/>
    </div>
    <div class="form-group">
        <label>Tahun Terbit:</label>
        <input type="text" name="tahun_terbit" class="form-control" value="{{ $buku->tahun_terbit }}" required/>
    </div>
    <div class="form-group">
        <label>Stok:</label>
        <input type="text" name="stok" class="form-control" value="{{ $buku->stok }}" required/>
    </div>
   

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="/data_buku" class="btn btn-primary" role="button">Batal</a>
</form>
@endsection