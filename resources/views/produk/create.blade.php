@extends('layout')

@section('content')
<h2>Tambah Produk</h2>

<form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
  @csrf

  <div class="mb-3">
    <label>Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Harga</label>
    <input type="number" name="harga" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Stok</label>
    <input type="number" name="stok" class="form-control" required>
  </div>

  <div class="mb-3">
    <label>Kategori</label>
    <select name="kategori_id" class="form-select" required>
      <option value="">-- Pilih Kategori --</option>
      @foreach($kategori as $k)
        <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
      @endforeach
    </select>
  </div>

  <div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control" rows="3"></textarea>
  </div>

  <div class="mb-3">
    <label>Gambar</label>
    <input type="file" name="gambar" class="form-control">
  </div>

  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
