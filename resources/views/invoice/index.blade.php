@extends('template.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Daftar Invoice</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <a href="{{ route('invoice.create') }}" class="btn btn-md btn-primary btn-custom">Tambah Invoice</a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">ID</th>
                                        <th scope="col" class="text-center">ID Kwitansi</th>
                                        <th scope="col" class="text-center">ID Penyewa</th>
                                        <th scope="col" class="text-center">No. Pol</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoice as $item)
                                        <tr>
                                            <td class="text-center">{{ $item->id }}</td>
                                            <td class="text-center">{{ $item->kwitansi->id }}</td>
                                            <td class="text-center">{{ $item->penyewa->id_penyewa }}</td>
                                            <td class="text-center">{{ $item->kendaraan->no_pol }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('invoice.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                                                <a href="{{ route('invoice.edit', $item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('invoice.destroy', $item->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection