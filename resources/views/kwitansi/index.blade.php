@extends('template.app')

@section('content')
<div class="container mt-5">

    <h2 class="mb-4">Daftar Kwitansi</h2>
    <a href="{{ route('kwitansi.create') }}" class="btn btn-md btn-primary btn-custom">Tambah Kwitansi</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal Kwitansi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kwitansis as $kwitansi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kwitansi->tgl_kwitansi }}</td>
                <td>
                    <a href="{{ route('kwitansi.show', $kwitansi->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('kwitansi.edit', $kwitansi->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('kwitansi.destroy', $kwitansi->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection