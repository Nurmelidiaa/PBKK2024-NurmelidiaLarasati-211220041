<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

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
            'no_hp' => 'required|max:15', // Validasi untuk no_hp maksimal 15 karakter
        ]);

        Penyewa::create($request->all());

        return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil ditambahkan');
    }

    public function edit($id): View
    {
        $penyewa = Penyewa::findOrFail($id);
        return view('penyewa.edit', compact('penyewa'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'nama_penyewa' => 'required|min:5',
            'alamat' => 'required|min:5',
            'no_hp' => 'required|max:15', // Validasi untuk no_hp maksimal 15 karakter
        ]);

        $penyewa = Penyewa::findOrFail($id);
        $penyewa->update($request->all());

        return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil diperbarui');
    }

    public function destroy($id): RedirectResponse
    {
        $penyewa = Penyewa::findOrFail($id);
        $penyewa->delete();

        return redirect()->route('penyewa.index')->with('success', 'Penyewa berhasil dihapus');
    }

    public function show($id): View
    {
        $penyewa = Penyewa::findOrFail($id);
        return view('penyewa.show', compact('penyewa'));
    }
}