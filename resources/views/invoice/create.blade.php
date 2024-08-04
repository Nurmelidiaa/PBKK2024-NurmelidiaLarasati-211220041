@extends('template.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="mb-0">Tambah Invoice</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('invoice.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="id_kwitansi" class="form-label">ID Kwitansi</label>
                                <select class="form-select @error('id_kwitansi') is-invalid @enderror" id="id_kwitansi" name="id_kwitansi">
                                    <option value="">Pilih Kwitansi</option>
                                    @foreach ($kwitansi as $item)
                                        <option value="{{ $item->id }}">{{ $item->id }}</option>
                                    @endforeach
                                </select>
                                @error('id_kwitansi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="id_penyewa" class="form-label">ID Penyewa</label>
                                <select class="form-select @error('id_penyewa') is-invalid @enderror" id="id_penyewa" name="id_penyewa">
                                    <option value="">Pilih Penyewa</option>
                                    @foreach ($penyewa as $item)
                                        <option value="{{ $item->id_penyewa }}">{{ $item->id_penyewa }}</option>
                                    @endforeach
                                </select>
                                @error('id_penyewa')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="no_pol" class="form-label">Nomor Polisi</label>
                                <select class="form-select @error('no_pol') is-invalid @enderror" id="no_pol" name="no_pol">
                                    <option value="">Pilih Nomor Polisi</option>
                                    @foreach ($kendaraan as $item)
                                        <option value="{{ $item->no_pol }}">{{ $item->no_pol }}</option>
                                    @endforeach
                                </select>
                                @error('no_pol')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-start">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('invoice.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection