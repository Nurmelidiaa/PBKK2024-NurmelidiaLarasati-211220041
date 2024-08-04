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
        $request->validate([
            'tgl_kwitansi' => 'required|date',
        ]);

        Kwitansi::create($request->all());

        return redirect()->route('kwitansi.index')
            ->with('success', 'Kwitansi created successfully.');
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
        $request->validate([
            'tgl_kwitansi' => 'required|date',
        ]);

        $kwitansi->update($request->all());

        return redirect()->route('kwitansi.index')
            ->with('success', 'Kwitansi updated successfully.');
    }

    public function destroy(Kwitansi $kwitansi)
    {
        $kwitansi->delete();

        return redirect()->route('kwitansi.index')
            ->with('success', 'Kwitansi deleted successfully.');
    }
}