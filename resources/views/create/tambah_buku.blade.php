@extends('dashboard.layouts.main')

@section('container')
<br>
<h2>Input Data</h2>


<form action="/simpan_buku" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label>kode:</label>
        <input type="text" name="kode" class="form-control" placeholder="Masukan kode" required />

    </div>
    <div class="form-group">
        <label>judul:</label>
        <input type="text" name="judul" class="form-control" placeholder="Masukan judul" required/>
    </div>
   <div class="form-group">
        <label>penulis :</label>
        <input type="text" name="penulis" class="form-control" placeholder="Masukan nama penulis" required/>
    </div>
    <div class="form-group">
        <label>penerbit :</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Masukan penerbit" required/>
    </div>
    <div class="form-group">
        <label>tahun terbit :</label>
        <input type="text" name="tahun terbit" class="form-control" placeholder="Masukan tahun terbit" required/>
    </div>
    <div class="form-group">
        <label>Stok:</label>
        <input type="text" name="stok" class="form-control" placeholder="Masukan Stok" required/>
    </div>
              

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <a href="/data_buku" class="btn btn-primary" role="button">Kembali</a>

</form>
@endsection