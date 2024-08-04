<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kwitansi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Tambah Kwitansi</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada masalah dengan input Anda.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kwitansi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tgl_kwitansi">Tanggal Kwitansi:</label>
            <input type="date" name="tgl_kwitansi" class="form-control" id="tgl_kwitansi" value="{{ old('tgl_kwitansi') }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <a href="{{ route('kwitansi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
</body>
</html>