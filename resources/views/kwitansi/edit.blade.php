@extends('template.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Edit Kwitansi</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kwitansi.update', $kwitansi->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="tgl_kwitansi" class="form-label">Tanggal Kwitansi</label>
                                <input type="date" class="form-control" id="tgl_kwitansi" name="tgl_kwitansi" value="{{ $kwitansi->tgl_kwitansi }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <a href="{{ route('kwitansi.index') }}" class="btn btn-secondary">Batal</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection