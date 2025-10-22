@extends('layout')

@section('content')
<h2>Tambah Kategori</h2>

<form action="{{ route('kategori.store') }}" method="POST">
  @csrf
  <div class="mb-3">
    <label>Nama Kategori</label>
    <input type="text" name="nama_kategori" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
