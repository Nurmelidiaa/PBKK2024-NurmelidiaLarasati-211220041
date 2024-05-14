<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kwitansi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Kwitansi</div>
                    <div class="card-body">
                        <form action="{{ route('kwitansi.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="tgl_kwitansi" class="form-label">Tanggal Kwitansi</label>
                                <input type="date" class="form-control" id="tgl_kwitansi" name="tgl_kwitansi">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>