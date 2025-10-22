@extends('layout')

@section('content')
<h2>Edit Produk</h2>

<form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label>Nama Produk</label>
    <input type="text" name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required>
  </div>

  <div class="mb-3">
    <label>Harga</label>
    <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}" required>
  </div>

  <div class="mb-3">
    <label>Stok</label>
    <input type="number" name="stok" class="form-control" value="{{ $produk->stok }}" required>
  </div>

  <div class="mb-3">
    <label>Kategori</label>
    <select name="kategori_id" class="form-select" required>
      @foreach($kategori as $k)
        <option value="{{ $k->id }}" {{ $produk->kategori_id == $k->id ? 'selected' : '' }}>
          {{ $k->nama_kategori }}
        </option>
      @endforeach
    </select>
  </div>

  <div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control" rows="3">{{ $produk->deskripsi }}</textarea>
  </div>

  <div class="mb-3">
    <label>Gambar Saat Ini</label><br>
    @if($produk->gambar)
      <img src="{{ asset('storage/'.$produk->gambar) }}" width="100"><br><br>
    @endif
    <input type="file" name="gambar" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
  <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
