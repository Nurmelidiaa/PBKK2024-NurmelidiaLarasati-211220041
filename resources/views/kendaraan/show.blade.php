@extends('template.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Detail Kendaraan</h4>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-4">No. Pol:</dt>
                            <dd class="col-sm-8">{{ $kendaraan->no_pol }}</dd>

                            <dt class="col-sm-4">No. Mesin:</dt>
                            <dd class="col-sm-8">{{ $kendaraan->no_mesin }}</dd>

                            <dt class="col-sm-4">Jenis:</dt>
                            <dd class="col-sm-8">{{ $kendaraan->jenis_mobil }}</dd>

                            <dt class="col-sm-4">Nama Mobil:</dt>
                            <dd class="col-sm-8">{{ $kendaraan->nama_mobil }}</dd>

                            <dt class="col-sm-4">Merek:</dt>
                            <dd class="col-sm-8">{{ $kendaraan->merek }}</dd>

                            <dt class="col-sm-4">Kapasitas:</dt>
                            <dd class="col-sm-8">{{ $kendaraan->kapasitas }}</dd>

                            <dt class="col-sm-4">Tarif Sewa:</dt>
                            <dd class="col-sm-8">{{ $kendaraan->tarif }}</dd>
                        </dl>

                        <div class="text-start mt-4">
                            <a href="{{ route('kendaraan.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection