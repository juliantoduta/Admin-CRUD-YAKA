@extends('layout')

@section('content')
<div class="d-flex justify-content-between mb-3">
  <h2>Daftar Kategori</h2>
  <a href="{{ route('kategori.create') }}" class="btn btn-primary">+ Tambah Kategori</a>
</div>

<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th>No</th>
      <th>Nama Kategori</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($kategori as $k)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $k->nama_kategori }}</td>
      <td>
        <a href="{{ route('kategori.edit', $k->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('kategori.destroy', $k->id) }}" method="POST" class="d-inline">
          @csrf @method('DELETE')
          <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus kategori ini?')">Hapus</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
