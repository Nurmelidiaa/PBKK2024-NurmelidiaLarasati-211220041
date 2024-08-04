@extends('template.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Daftar Kendaraan Sewa</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <a href="{{ route('kendaraan.create') }}" class="btn btn-md btn-primary btn-custom">Tambah Kendaraan</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">No. Pol</th>
                                        <th scope="col" class="text-center">No. Mesin</th>
                                        <th scope="col" class="text-center">Jenis</th>
                                        <th scope="col" class="text-center">Nama Mobil</th>
                                        <th scope="col" class="text-center">Merek</th>
                                        <th scope="col" class="text-center">Kapasitas</th>
                                        <th scope="col" class="text-center">Tarif Sewa</th>
                                        <th scope="col" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kendaraans as $data)
                                        <tr>
                                            <td class="text-center">{{ $data->no_pol }}</td>
                                            <td class="text-center">{{ $data->no_mesin }}</td>
                                            <td class="text-center">{{ $data->jenis_mobil }}</td>
                                            <td class="text-center">{{ $data->nama_mobil }}</td>
                                            <td class="text-center">{{ $data->merek }}</td>
                                            <td class="text-center">{{ $data->kapasitas }}</td>
                                            <td class="text-center">{{ $data->tarif }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('kendaraan.show', $data->no_pol) }}" class="btn btn-info btn-sm">Detail</a>
                                                <a href="{{ route('kendaraan.edit', $data->no_pol) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('kendaraan.destroy', $data->no_pol) }}" method="POST" style="display: inline;">
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
                        <nav aria-label="Page navigation example" class="mt-4">
                            <ul class="pagination justify-content-center">
                                {{ $kendaraans->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection