@extends('template.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Edit Kendaraan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kendaraan.update', $kendaraan->no_pol) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-3">
                                <label for="no_pol" class="form-label">No. Pol</label>
                                <input type="text" class="form-control" id="no_pol" name="no_pol" value="{{ $kendaraan->no_pol }}" required>
                                @error('no_pol')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="no_mesin" class="form-label">No. Mesin</label>
                                <input type="text" class="form-control" id="no_mesin" name="no_mesin" value="{{ $kendaraan->no_mesin }}" required>
                                @error('no_mesin')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jenis_mobil" class="form-label">Jenis Kendaraan</label>
                                <select class="form-select" id="jenis_mobil" name="jenis_mobil" required>
                                    <option value="mpv" {{ $kendaraan->jenis_mobil == 'mpv' ? 'selected' : '' }}>MPV</option>
                                    <option value="city" {{ $kendaraan->jenis_mobil == 'city' ? 'selected' : '' }}>City</option>
                                    <option value="suv" {{ $kendaraan->jenis_mobil == 'suv' ? 'selected' : '' }}>SUV</option>
                                </select>
                                @error('jenis_mobil')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nama_mobil" class="form-label">Nama Mobil</label>
                                <input type="text" class="form-control" id="nama_mobil" name="nama_mobil" value="{{ $kendaraan->nama_mobil }}" required>
                                @error('nama_mobil')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="merek" class="form-label">Merek</label>
                                <select class="form-select" id="merek" name="merek" required>
                                    <option value="honda" {{ $kendaraan->merek == 'honda' ? 'selected' : '' }}>Honda</option>
                                    <option value="toyota" {{ $kendaraan->merek == 'toyota' ? 'selected' : '' }}>Toyota</option>
                                    <option value="daihatsu" {{ $kendaraan->merek == 'daihatsu' ? 'selected' : '' }}>Daihatsu</option>
                                </select>
                                @error('merek')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="kapasitas" class="form-label">Kapasitas</label>
                                <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="{{ $kendaraan->kapasitas }}" required>
                                @error('kapasitas')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="tarif" class="form-label">Tarif Sewa</label>
                                <input type="number" class="form-control" id="tarif" name="tarif" value="{{ $kendaraan->tarif }}" step="0.01" required>
                                @error('tarif')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection