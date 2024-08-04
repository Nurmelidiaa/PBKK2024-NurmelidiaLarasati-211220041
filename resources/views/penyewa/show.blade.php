@extends('template.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Detail Penyewa</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Nama Penyewa:</strong>
                        <p>{{ $penyewa->nama_penyewa }}</p>
                    </div>
                    <div class="mb-3">
                        <strong>Alamat:</strong>
                        <p>{{ $penyewa->alamat }}</p>
                    </div>
                    <div class="mb-3">
                        <strong>Nomor HP:</strong>
                        <p>{{ $penyewa->no_hp }}</p>
                    </div>
                    <a href="{{ route('penyewa.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection