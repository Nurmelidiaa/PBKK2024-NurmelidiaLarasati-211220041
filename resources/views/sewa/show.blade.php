@extends('template.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Detail Sewa</div>
            <div class="card-body">
                <div class="mb-3">
                    <label for="no_pol" class="form-label">Nomor Polisi Kendaraan:</label>
                    <p>{{ $sewa->kendaraan->no_pol }}</p>
                </div>
                <div class="mb-3">
                    <label for="tgl_sewa" class="form-label">Tanggal Mulai Sewa:</label>
                    <p>{{ $sewa->tgl_sewa }}</p>
                </div>
                <div class="mb-3">
                    <label for="tgl_selesai" class="form-label">Tanggal Selesai Sewa:</label>
                    <p>{{ $sewa->tgl_selesai }}</p>
                </div>
                <div class="mb-3">
                    <label for="tlp_tujuan" class="form-label">Telepon Tujuan:</label>
                    <p>{{ $sewa->tlp_tujuan }}</p>
                </div>
                <div class="mb-3">
                    <label for="alamat_tujuan" class="form-label">Alamat Tujuan:</label>
                    <p>{{ $sewa->alamat_tujuan }}</p>
                </div>
                <div class="mb-3">
                    <label for="biaya_sewa" class="form-label">Biaya Sewa:</label>
                    <p>{{ $sewa->biaya_sewa }}</p>
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label">Kota:</label>
                    <p>{{ $sewa->kota }}</p>
                </div>
                <div class="mb-3">
                    <label for="penyewa" class="form-label">Nama Penyewa:</label>
                    <p>{{ $sewa->penyewa->nama_penyewa }}</p>
                </div>
                <div class="mb-3">
                    <label for="jlh_penumpang" class="form-label">Jumlah Penumpang:</label>
                    <p>{{ $sewa->jlh_penumpang }}</p>
                </div>
                <div class="mb-3">
                    <label for="kwitansi" class="form-label">Nomor Kwitansi:</label>
                    <p>{{ $sewa->kwitansi->id }}</p>
                </div>
                <a href="{{ route('sewa.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection