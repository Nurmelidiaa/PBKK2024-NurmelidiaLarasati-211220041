@extends('template.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Detail Invoice</h4>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-4">ID Kwitansi</dt>
                            <dd class="col-sm-8">{{ $invoice->kwitansi->id }}</dd>

                            <dt class="col-sm-4">ID Penyewa</dt>
                            <dd class="col-sm-8">{{ $invoice->penyewa->id_penyewa }}</dd>

                            <dt class="col-sm-4">No Polisi</dt>
                            <dd class="col-sm-8">{{ $invoice->kendaraan->no_pol }}</dd>

                            <dt class="col-sm-4">Tanggal</dt>
                            <dd class="col-sm-8">{{ $invoice->created_at->format('d-m-Y H:i:s') }}</dd>
                        </dl>
                        <a href="{{ route('invoice.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection