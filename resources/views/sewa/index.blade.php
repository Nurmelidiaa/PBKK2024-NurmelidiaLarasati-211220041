@extends('template.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header text-center">
          <h3 class="my-3">Daftar Sewa</h3>
        </div>
        <div class="card-body">
          @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif

          <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('sewa.create') }}" class="btn btn-md btn-primary btn-custom">Tambah Sewa Kendaraan Baru</a>
          </div>
          @if (count($sewa) > 0)
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nomor Polisi</th>
                    <th scope="col" class="text-center">Tanggal Sewa</th>
                    <th scope="col" class="text-center">Tanggal Selesai</th>
                    <th scope="col" class="text-center">Biaya Sewa</th>
                    <th scope="col" class="text-center" style="width: 25%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($sewa as $index => $item)
                    <tr>
                      <td class="text-center">{{ ++$index }}</td>
                      <td>{{ $item->kendaraan->no_pol }}</td>
                      <td>{{ $item->tgl_sewa }}</td>
                      <td>{{ $item->tgl_selesai }}</td>
                      <td>{{ $item->biaya_sewa }}</td>
                      <td class="text-center">
                        <a href="{{ route('sewa.show', $item->id_sewa) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('sewa.edit', $item->id_sewa) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('sewa.destroy', $item->id_sewa) }}" method="POST" style="display: inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
          @else
              <p class="text-center">Data Sewa Belum Ada.</p>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
@endsection