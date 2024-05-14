<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::paginate(10);
        return view('kendaraan.index', compact('kendaraan'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'no_pol' => 'required|unique:kendaraan|max:6',
        'no_mesin' => 'required|unique:kendaraan',
        'jenis_mobil' => 'required|in:mpv,city,suv',
        'nama_mobil' => 'required',
        'merek' => 'required|in:honda,toyota,daihatsu',
        'kapasitas' => 'required',
        'tarif' => 'required|numeric',
    ]);

    Kendaraan::create($request->all());

    return redirect()->route('kendaraan.index')
        ->with('success', 'Kendaraan berhasil ditambahkan.');
}

    public function show($no_pol)
    {
        $kendaraan = Kendaraan::where('no_pol', $no_pol)->firstOrFail();
        return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit($no_pol)
    {
        $kendaraan = Kendaraan::where('no_pol', $no_pol)->firstOrFail();
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $no_pol)
    {
        $request->validate([]);

        $kendaraan = Kendaraan::where('no_pol', $no_pol)->firstOrFail();
        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan berhasil diperbarui.');
    }

    public function destroy($no_pol)
    {
        $kendaraan = Kendaraan::where('no_pol', $no_pol)->firstOrFail();
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')
            ->with('success', 'Kendaraan berhasil dihapus.');
    }
}