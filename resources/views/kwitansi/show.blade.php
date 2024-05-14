<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kwitansi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Kwitansi</div>
                    <div class="card-body">
                        @if($kwitansi)
                        <div class="mb-3">
                            <label for="tgl_kwitansi" class="form-label">Tanggal Kwitansi</label>
                            <input type="text" class="form-control" id="tgl_kwitansi" name="tgl_kwitansi" value="{{ $kwitansi->tgl_kwitansi }}" readonly>
                        </div>
                        <a href="{{ route('kwitansi.edit', $kwitansi->id) }}" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger" onclick="event.preventDefault(); if(confirm('Apakah Anda yakin ingin menghapus data ini?')) { document.getElementById('hapus-kwitansi-form').submit(); }">Hapus</button>
                        <form id="hapus-kwitansi-form" action="{{ route('kwitansi.destroy', $kwitansi->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        @else
                        <p>Data Kwitansi tidak ditemukan.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
