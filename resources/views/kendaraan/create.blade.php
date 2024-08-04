@extends('template.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Tambah Kendaraan Baru</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kendaraan.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="no_pol" class="form-label">No. Pol</label>
                                <input type="text" class="form-control" id="no_pol" name="no_pol" value="{{ old('no_pol') }}" required>
                                @error('no_pol')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="no_mesin" class="form-label">No. Mesin</label>
                                <input type="text" class="form-control" id="no_mesin" name="no_mesin" value="{{ old('no_mesin') }}" required>
                                @error('no_mesin')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jenis_mobil" class="form-label">Jenis Kendaraan</label>
                                <select class="form-select" id="jenis_mobil" name="jenis_mobil" required>
                                    <option value="" disabled selected>Pilih Jenis Kendaraan</option>
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
                                <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="{{ old('nama_mobil') }}" required>
                                @error('nama_mobil')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="merek" class="form-label">Merek</label>
                                <select class="form-select" id="merek" name="merek" required>
                                    <option value="" disabled selected>Pilih Merek</option>
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
                                <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="{{ old('kapasitas') }}" required>
                                @error('kapasitas')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tarif" class="form-label">Tarif Sewa</label>
                                <input type="number" class="form-control" id="tarif" name="tarif" value="{{ old('tarif') }}" step="0.01" required>
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
@endsection