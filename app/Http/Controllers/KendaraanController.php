<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    public function index()
    {
        // Ambil data kendaraan dengan paginasi
        $kendaraans = Kendaraan::paginate(10);
        return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        // Tampilkan halaman create kendaraan
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'no_pol' => 'required|unique:kendaraan|max:6',
            'no_mesin' => 'required|unique:kendaraan',
            'jenis_mobil' => 'required|in:mpv,city,suv',
            'nama_mobil' => 'required',
            'merek' => 'required|in:honda,toyota,daihatsu',
            'kapasitas' => 'required',
            'tarif' => 'required|numeric',
        ]);

        // Simpan data kendaraan baru
        Kendaraan::create($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan.');
    }

    public function show($no_pol)
    {
        // Cari data kendaraan berdasarkan nomor polisi
        $kendaraan = Kendaraan::where('no_pol', $no_pol)->firstOrFail();
        return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit($no_pol)
    {
        // Cari data kendaraan berdasarkan nomor polisi
        $kendaraan = Kendaraan::where('no_pol', $no_pol)->firstOrFail();
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $no_pol)
    {
        // Validasi input
        $request->validate([
            'no_mesin' => 'required|unique:kendaraan,no_mesin,'.$no_pol.',no_pol',
            'jenis_mobil' => 'required|in:mpv,city,suv',
            'nama_mobil' => 'required',
            'merek' => 'required|in:honda,toyota,daihatsu',
            'kapasitas' => 'required',
            'tarif' => 'required|numeric',
        ]);

        // Cari data kendaraan berdasarkan nomor polisi
        $kendaraan = Kendaraan::where('no_pol', $no_pol)->firstOrFail();

        // Update data kendaraan
        $kendaraan->update($request->all());

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil diperbarui.');
    }

    public function destroy($no_pol)
    {
        // Cari data kendaraan berdasarkan nomor polisi
        $kendaraan = Kendaraan::where('no_pol', $no_pol)->firstOrFail();

        // Hapus data kendaraan
        $kendaraan->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil dihapus.');
    }
}