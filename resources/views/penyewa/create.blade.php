@extends('template.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Tambah Penyewa Baru</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('penyewa.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_penyewa" class="form-label">Nama Penyewa</label>
                                <input type="text" class="form-control @error('nama_penyewa') is-invalid @enderror" id="nama_penyewa" name="nama_penyewa" value="{{ old('nama_penyewa') }}">
                                @error('nama_penyewa')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">{{ old('alamat') }}</textarea>
                                @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomor HP</label>
                                <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') }}">
                                @error('no_hp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('penyewa.index') }}" class="btn btn-secondary">Batal</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection