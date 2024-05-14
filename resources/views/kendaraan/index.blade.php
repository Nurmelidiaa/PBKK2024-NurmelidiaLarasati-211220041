<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .daftar-kendaraan-header {
            background-color: #007bff;
            color: #fff;
            font-size: 24px;
            padding: 15px;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .btn-custom {
            border-radius: 10px;
            font-weight: bold;
            border: 2px solid #007bff;
            background-color: transparent;
            color: #007bff;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-custom:hover {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container mt-5 .mb3-custom">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="daftar-kendaraan-header text-center">Daftar Kendaraan Sewa</div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="{{ route('kendaraan.create') }}" class="btn btn-md btn-success btn-custom">Tambah Kendaraan</a>
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
            @foreach($kendaraan as $data)
                <tr>
                    <td class="text-center">{{ $data->no_pol }}</td>
                    <td class="text-center">{{ $data->no_mesin }}</td>
                    <td class="text-center">{{ $data->jenis_mobil }}</td>
                    <td class="text-center">{{ $data->nama_mobil }}</td>
                    <td class="text-center">{{ $data->merek }}</td>
                    <td class="text-center">{{ $data->kapasitas }}</td>
                    <td class="text-center">{{ $data->tarif }}</td>
                    <td class="text-center">
                        <a href="{{ route('kendaraan.show', $data->no_pol) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('kendaraan.edit', $data->no_pol) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('kendaraan.destroy', $data->no_pol) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <a href="{{ route('penyewa.index') }}" class="btn btn-secondary">Kembali ke Penyewaan</a>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="{{ route('kwitansi.index') }}" class="btn btn-secondary">Lanjut ke Kwitansi</a>
                            </div>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                {{ $kendaraan->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>