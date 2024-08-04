@extends('template.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Edit Sewa</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('sewa.update', $sewa->id_sewa) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="no_pol" class="form-label">Nomor Polisi</label>
                            <select class="form-select @error('no_pol') is-invalid @enderror" id="no_pol" name="no_pol">
                                @foreach ($kendaraan as $kendaraan)
                                    <option value="{{ $kendaraan->no_pol }}" {{ old('no_pol', $sewa->no_pol) == $kendaraan->no_pol ? 'selected' : '' }}>
                                        {{ $kendaraan->no_pol }} - {{ $kendaraan->nama_mobil }}
                                    </option>
                                @endforeach
                            </select>
                            @error('no_pol')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tgl_sewa" class="form-label">Tanggal Sewa</label>
                            <input type="date" class="form-control @error('tgl_sewa') is-invalid @enderror" id="tgl_sewa" name="tgl_sewa" value="{{ old('tgl_sewa', $sewa->tgl_sewa) }}">
                            @error('tgl_sewa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tgl_selesai" class="form-label">Tanggal Selesai</label>
                            <input type="date" class="form-control @error('tgl_selesai') is-invalid @enderror" id="tgl_selesai" name="tgl_selesai" value="{{ old('tgl_selesai', $sewa->tgl_selesai) }}">
                            @error('tgl_selesai')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tlp_tujuan" class="form-label">Telepon Tujuan</label>
                            <input type="text" class="form-control @error('tlp_tujuan') is-invalid @enderror" id="tlp_tujuan" name="tlp_tujuan" value="{{ old('tlp_tujuan', $sewa->tlp_tujuan) }}">
                            @error('tlp_tujuan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat_tujuan" class="form-label">Alamat Tujuan</label>
                            <textarea class="form-control @error('alamat_tujuan') is-invalid @enderror" id="alamat_tujuan" name="alamat_tujuan">{{ old('alamat_tujuan', $sewa->alamat_tujuan) }}</textarea>
                            @error('alamat_tujuan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="biaya_sewa" class="form-label">Biaya Sewa</label>
                            <div class="input-group">
                                <input type="text" class="form-control @error('biaya_sewa') is-invalid @enderror" id="biaya_sewa" name="biaya_sewa" value="{{ old('biaya_sewa', $sewa->biaya_sewa) }}">
                            </div>
                            @error('biaya_sewa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kota" class="form-label">Kota</label>
                            <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" value="{{ old('kota', $sewa->kota ?? 'PONTIANAK') }}">
                            @error('kota')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="id_penyewa" class="form-label">Penyewa</label>
                            <select class="form-select @error('id_penyewa') is-invalid @enderror" id="id_penyewa" name="id_penyewa">
                                @foreach ($penyewa as $penyewa)
                                    <option value="{{ $penyewa->id_penyewa }}" {{ old('id_penyewa', $sewa->id_penyewa) == $penyewa->id_penyewa ? 'selected' : '' }}>
                                        {{ $penyewa->nama_penyewa }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_penyewa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jlh_penumpang" class="form-label">Jumlah Penumpang</label>
                            <input type="text" class="form-control @error('jlh_penumpang') is-invalid @enderror" id="jlh_penumpang" name="jlh_penumpang" value="{{ old('jlh_penumpang', $sewa->jlh_penumpang) }}">
                            @error('jlh_penumpang')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="id_kwitansi" class="form-label">Kwitansi</label>
                            <select class="form-select @error('id_kwitansi') is-invalid @enderror" id="id_kwitansi" name="id_kwitansi">
                                @foreach ($kwitansi as $kwitansi)
                                    <option value="{{ $kwitansi->id }}" {{ old('id_kwitansi', $sewa->id_kwitansi) == $kwitansi->id ? 'selected' : '' }}>
                                        Kwitansi #{{ $kwitansi->id }} - Tanggal: {{ $kwitansi->tgl_kwitansi }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_kwitansi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-start mt-2">
                            <button type="submit" class="btn btn-primary btn-full-width mb-2">Simpan Perubahan</button>
                            <a href="{{ route('sewa.index') }}" class="btn btn-secondary btn-full-width mb-2">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection