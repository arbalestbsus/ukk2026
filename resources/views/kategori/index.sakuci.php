@extends('layouts.app')

@section('content')

<h1>Kategori</h1>
<a href="{{route('kategori.create')}}" class="btn btn-primary btn-sm">Tambah Kategori</a>
<table class="table table-bordered mt-3">
    <tr>
        <th>No</th>
        <th>Keterangan</th>
        <th>Aksi</th>
    </tr>
    @php $no = 1; @endphp
    @foreach($data as $d)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $d->keterangan }}</td>
        <td>
            <a href="{{ route('kategori.edit', ['id_kategori' => $d->id_kategori]) }}" class="btn btn-success btn-sm">Edit</a>
            <form action="{{ route('kategori.destroy', ['id_kategori' => $d->id_kategori]) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>
            </form>
        </td>
    </tr>

    @endforeach
</table>

@endsection