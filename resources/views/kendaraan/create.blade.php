<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kendaraan Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Kendaraan Baru</div>
                    <div class="card-body">
                        <form action="{{ route('kendaraan.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="no_pol" class="form-label">No. Pol</label>
                                <input type="text" class="form-control" id="no_pol" name="no_pol" value="{{ old('no_pol') }}">
                                @error('no_pol')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no_mesin" class="form-label">No. Mesin</label>
                                <input type="text" class="form-control" id="no_mesin" name="no_mesin" value="{{ old('no_mesin') }}">
                                @error('no_mesin')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jenis_mobil" class="form-label">Jenis Kendaraan</label>
                                <select class="form-select" id="jenis_mobil" name="jenis_mobil">
                                    <option value="mpv">MPV</option>
                                    <option value="city">City</option>
                                    <option value="suv">SUV</option>
                                </select>
                                @error('jenis_mobil')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama_mobil" class="form-label">Nama Mobil</label>
                                <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="{{ old('nama_mobil') }}">
                                @error('nama_mobil')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="merek" class="form-label">Merek</label>
                                <select class="form-select" id="merek" name="merek">
                                    <option value="honda">Honda</option>
                                    <option value="toyota">Toyota</option>
                                    <option value="daihatsu">Daihatsu</option>
                                </select>
                                @error('merek')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kapasitas" class="form-label">Kapasitas</label>
                                <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="{{ old('kapasitas') }}">
                                @error('kapasitas')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tarif" class="form-label">Tarif Sewa</label>
                                <input type="number" class="form-control" id="tarif" name="tarif" value="{{ old('tarif') }}">
                                @error('tarif')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
