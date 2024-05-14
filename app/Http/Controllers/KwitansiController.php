<?php

namespace App\Http\Controllers;

use App\Models\Kwitansi;
use Illuminate\Http\Request;

class KwitansiController extends Controller
{
    public function index()
    {
        $kwitansis = Kwitansi::all();
        return view('kwitansi.index', compact('kwitansis'));
    }

    public function create()
    {
        return view('kwitansi.create');
    }

    public function store(Request $request)
    {
        Kwitansi::create($request->all());
        return redirect()->route('kwitansi.index');
    }

    public function show(Kwitansi $kwitansi)
    {
        return view('kwitansi.show', compact('kwitansi'));
    }

    public function edit(Kwitansi $kwitansi)
    {
        return view('kwitansi.edit', compact('kwitansi'));
    }

    public function update(Request $request, Kwitansi $kwitansi)
    {
        $kwitansi->update($request->all());
        return redirect()->route('kwitansi.index');
    }

    public function destroy($id): RedirectResponse
    {
        $kwitansi = Kwitansi::findOrFail($id);
        $kwitansi->delete();
        return redirect()->route('kwitansi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}