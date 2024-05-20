@extends('dashboard.layouts.main')

@section('container')
<div class="search">
    <form class="form-inline my-2 my-lg-0" method="GET" action="/search_buku">
        <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search" name="query">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    
   
    <thead>
    
   <table class="my-3 table table-bordered">
        <tr class="table-primary"> 
        <th>No</th>          
        <th>kode</th>
        <th>judul</th>
        <th>penulis</th>
        <th>penerbit</th>
        <th>tahun terbit</th>
        <th>stok</th>
        <th colspan='2'>Aksi</th>
    </tr>
</thead>
<tbody>
    @foreach($dtbuku as $key => $item)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $item->kode}}</td>
        <td>{{ $item->judul}}</td>
        <td>{{ $item->penulis}}</td>
        <td>{{ $item->penerbit}}</td>
        <td>{{ $item->tahun_terbit}}</td>
        <td>{{ $item->stok}}</td>
        <td>
            <!-- Edit Button -->
            <a href="/edit_buku/{{ $item->id }}" class="btn btn-sm btn-primary mr-2">Edit</a>
            <form action="/hapus_buku/{{ $item->id }}" method="post" style="display: inline;">
{{ csrf_field() }}
{{ method_field('DELETE') }}
<button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin ingin menghapus data buku ini?')">Hapus</button>
</form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
</div>
<a href= "/tambah_buku" class="btn btn-primary" role="button">Tambah Data</a>

@endsection

