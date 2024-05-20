<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Input Data Peminjaman</title>
  <link rel="stylesheet" href="/css/form.css">
</head>
<body>
  <div class="container">
    <h2>Input Data Peminjaman</h2>
    <form action="/simpan_formpeminjaman" method="post">
      @csrf <!-- CSRF Protection -->
      <div class="form-group">
        <div class="form-group">
          <label for="nama_peminjam">Nama Peminjam:</label>
          <input type="text" id="nama_peminjam" name="nama_peminjam" class="form-control" value="{{ auth()->user()->nama }}" required readonly>
        </div>
      </div>
      
      </div>
      <div class="form-group">
        <label for="judul_buku">Judul Buku:</label>
        <input type="text" id="judul_buku" name="judul_buku" class="form-control" placeholder="Masukan judul buku" value="{{ isset($_GET['judul']) ? $_GET['judul'] : '' }}" required>
      </div>
      <div class="form-group">
        <label for="tgl_pinjam">Tanggal pinjam:</label>
        <input type="date" id="tgl_pinjam" name="tgl_pinjam" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="tgl_kembali">Tanggal kembali:</label>
        <input type="date" id="tgl_kembali" name="tgl_kembali" class="form-control" required>
      </div>
      <div class="btn-container">
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        <a href="/user_halaman" class="btn btn-primary">Kembali</a>
      </div>
    </form>
  </div>
</body>
</html>