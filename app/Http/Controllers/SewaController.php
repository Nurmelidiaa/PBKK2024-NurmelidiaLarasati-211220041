<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;
use App\Models\Penyewa;
use App\Models\Kwitansi;
use App\Models\Kendaraan;

class SewaController extends Controller
{
    public function index()
    {
        $sewa = Sewa::with(['kendaraan', 'penyewa', 'kwitansi'])->paginate(10);
        return view('sewa.index', compact('sewa'));
    }

    public function create()
    {
        // Ambil data kendaraan, penyewa, dan kwitansi untuk dropdown
        $kendaraan = Kendaraan::all();
        $penyewa = Penyewa::all();
        $kwitansi = Kwitansi::all();

        return view('sewa.create', compact('kendaraan', 'penyewa', 'kwitansi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_pol' => 'required|exists:kendaraan,no_pol',
            'tgl_sewa' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_sewa',
            'tlp_tujuan' => 'required|string|max:15',
            'alamat_tujuan' => 'required|string',
            'biaya_sewa' => 'required|numeric',
            'kota' => 'required|string|max:50', 
            'id_penyewa' => 'required|exists:penyewa,id_penyewa',
            'jlh_penumpang' => 'required|numeric',
            'id_kwitansi' => 'required|exists:kwitansi,id',
        ]);
        Sewa::create($request->all());
        return redirect()->route('sewa.index')->with('success', 'Data sewa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $sewa = Sewa::findOrFail($id);

        $kendaraan = Kendaraan::all();
        $penyewa = Penyewa::all();
        $kwitansi = Kwitansi::all();

        return view('sewa.edit', compact('sewa', 'kendaraan', 'penyewa', 'kwitansi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_pol' => 'required|exists:kendaraan,no_pol',
            'tgl_sewa' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_sewa',
            'tlp_tujuan' => 'required|string|max:15',
            'alamat_tujuan' => 'required|string',
            'biaya_sewa' => 'required|numeric',
            'kota' => 'required|string|max:50',
            'id_penyewa' => 'required|exists:penyewa,id_penyewa',
            'jlh_penumpang' => 'required|numeric',
            'id_kwitansi' => 'required|exists:kwitansi,id',
        ]);

        $sewa = Sewa::findOrFail($id);
        $sewa->update($request->all());

        return redirect()->route('sewa.index')->with('success', 'Data sewa berhasil diperbarui.');
    }

    public function show($id)
    {
        $sewa = Sewa::with(['kendaraan', 'penyewa', 'kwitansi'])->findOrFail($id);
        return view('sewa.show', compact('sewa'));
    }

    public function destroy($id)
    {
        $sewa = Sewa::findOrFail($id);
        $sewa->delete();

        return redirect()->route('sewa.index')->with('success', 'Sewa berhasil dihapus.');
    }
}