<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PenyewaController extends Controller
{
    public function index(): View
    {
        $penyewa = Penyewa::latest()->paginate(10);
        return view('penyewa.index', compact('penyewa'));
    }

    public function create(): View
    {
        return view('penyewa.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nama_penyewa' => 'required|min:5',
            'alamat' => 'required|min:5',
            'no_hp' => 'required|min:5',
        ]);

        Penyewa::create([
            'nama_penyewa' => $request->nama_penyewa,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('penyewa.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $penyewa = Penyewa::findOrFail($id);
        return view('penyewa.show', compact('penyewa'));
    }

    public function edit(string $id): View
    {
        $penyewa = Penyewa::findOrFail($id);
        return view('penyewa.edit', compact('penyewa'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_penyewa' => 'required|min:5',
            'alamat' => 'required|min:5',
            'no_hp' => 'required|min:5',
        ]);

        $penyewa = Penyewa::findOrFail($id);
        $penyewa->update([
            'nama_penyewa' => $request->nama_penyewa,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('penyewa.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $penyewa = Penyewa::findOrFail($id);
        $penyewa->delete();
        return redirect()->route('penyewa.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}