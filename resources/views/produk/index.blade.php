@extends('layout')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h2>Daftar Produk</h2>
  <a href="{{ route('produk.create') }}" class="btn btn-primary">+ Tambah Produk</a>
</div>

<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Kategori</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produk as $p)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $p->nama_produk }}</td>
      <td>Rp{{ number_format($p->harga, 0, ',', '.') }}</td>
      <td>{{ $p->stok }}</td>
      <td>{{ $p->kategori->nama_kategori ?? '-' }}</td>
      <td>
        @if($p->gambar)
          <img src="{{ asset('storage/'.$p->gambar) }}" width="70">
        @else
          <small class="text-muted">Tidak ada</small>
        @endif
      </td>
      <td>
        <a href="{{ route('produk.edit', $p->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('produk.destroy', $p->id) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus produk ini?')">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
