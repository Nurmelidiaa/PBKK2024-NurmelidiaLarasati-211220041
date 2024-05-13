<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kendaraan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Kendaraan</div>
                    <div class="card-body">
                        <p><strong>No. Pol:</strong> {{ $kendaraan->no_pol }}</p>
                        <p><strong>No. Mesin:</strong> {{ $kendaraan->no_mesin }}</p>
                        <p><strong>Jenis:</strong> {{ $kendaraan->jenis_mobil }}</p>
                        <p><strong>Nama Mobil:</strong> {{ $kendaraan->nama_mobil }}</p>
                        <p><strong>Merek:</strong> {{ $kendaraan->merek }}</p>
                        <p><strong>Kapasitas:</strong> {{ $kendaraan->kapasitas }}</p>
                        <p><strong>Tarif Sewa:</strong> {{ $kendaraan->tarif }}</p>
                    
                        <a href="{{ route('kendaraan.show', $kendaraan->no_pol) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
