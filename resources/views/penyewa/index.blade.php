@extends('template.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header text-center">
          <h3 class="my-3">Daftar Penyewa</h3>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="{{ route('penyewa.create') }}" class="btn btn-md btn-primary btn-custom">Tambah Penyewa Baru</a>
          </div>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col" class="text-center">Nama Penyewa</th>
                <th scope="col" class="text-center">Alamat</th>
                <th scope="col" class="text-center">Nomor HP</th>
                <th scope="col" class="text-center" style="width: 25%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($penyewa as $index => $data)
                <tr>
                  <td class="text-center">{{ ++$index }}</td>
                  <td>{{ $data->nama_penyewa }}</td>
                  <td>{{ $data->alamat }}</td>
                  <td>{{ $data->no_hp }}</td>
                  <td class="text-center">
                    <a href="{{ route('penyewa.show', $data->id_penyewa) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('penyewa.edit', $data->id_penyewa) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('penyewa.destroy', $data->id_penyewa) }}" method="POST" style="display: inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5" class="text-center">Data Penyewa Belum Ada.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
          {{-- {{ $penyewa->links() }} --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection