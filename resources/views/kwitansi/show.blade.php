@extends('template.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Detail Kwitansi</h1>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title mb-0">Informasi Kwitansi</h5>
        </div>
        <div class="card-body">
            <p><strong>Tanggal Kwitansi:</strong> {{ $kwitansi->tgl_kwitansi }}</p>
            <!-- Tambahkan detail lainnya sesuai kebutuhan -->
        </div>
    </div>

    <a href="{{ route('kwitansi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection