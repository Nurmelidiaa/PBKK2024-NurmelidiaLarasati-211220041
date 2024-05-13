<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Daftar Kendaraan Sewa</div>
                    <div class="card-body">
                        <a href="{{ route('kendaraan.create') }}" class="btn btn-md btn-primary mb-3">Tambah Kendaraan</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No. Pol</th>
                                    <th scope="col">No. Mesin</th>
                                    <th scope="col">Jenis</th>
                                    <th scope="col">Nama Mobil</th>
                                    <th scope="col">Merek</th>
                                    <th scope="col">Kapasitas</th>
                                    <th scope="col">Tarif Sewa</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($kendaraan as $data)
    <tr>
        <td>{{ $data->no_pol }}</td>
        <td>{{ $data->no_mesin }}</td>
        <td>{{ $data->jenis_mobil }}</td>
        <td>{{ $data->nama_mobil }}</td>
        <td>{{ $data->merek }}</td>
        <td>{{ $data->kapasitas }}</td>
        <td>{{ $data->tarif }}</td>
        <td>
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
                        {{ $kendaraan->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
