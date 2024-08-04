<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Kwitansi; // Import model Kwitansi
use App\Models\Penyewa; // Import model Penyewa
use App\Models\Kendaraan; // Import model Kendaraan
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        // Ambil data dengan relasi yang diperlukan
        $invoice = Invoice::with(['kwitansi', 'penyewa', 'kendaraan'])->get();
        return view('invoice.index', compact('invoice')); // Sesuaikan variabel dengan view
    }

    public function create()
    {
        // Ambil data yang diperlukan untuk dropdown
        $kwitansi = Kwitansi::all();
        $penyewa = Penyewa::all();
        $kendaraan = Kendaraan::all();

        return view('invoice.create', compact('kwitansi', 'penyewa', 'kendaraan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kwitansi' => 'required|exists:kwitansi,id',
            'id_penyewa' => 'required|exists:penyewa,id_penyewa', // Sesuaikan dengan nama kolom di tabel
            'no_pol' => 'required|exists:kendaraan,no_pol', // Sesuaikan dengan nama kolom di tabel
        ]);

        Invoice::create($request->all());

        return redirect()->route('invoice.index')->with('success', 'Invoice created successfully.');
    }

    public function show(Invoice $invoice)
    {
        // Ambil relasi yang diperlukan untuk detail
        $invoice->load('kwitansi', 'penyewa', 'kendaraan');
        return view('invoice.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        // Ambil data yang diperlukan untuk dropdown
        $kwitansi = Kwitansi::all();
        $penyewa = Penyewa::all();
        $kendaraan = Kendaraan::all();

        // Load relasi untuk pre-fill form
        $invoice->load('kwitansi', 'penyewa', 'kendaraan');
        
        return view('invoice.edit', compact('invoice', 'kwitansi', 'penyewa', 'kendaraan'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $request->validate([
            'id_kwitansi' => 'required|exists:kwitansi,id',
            'id_penyewa' => 'required|exists:penyewa,id_penyewa', // Sesuaikan dengan nama kolom di tabel
            'no_pol' => 'required|exists:kendaraan,no_pol', // Sesuaikan dengan nama kolom di tabel
        ]);

        $invoice->update($request->all());

        return redirect()->route('invoice.index')->with('success', 'Invoice updated successfully.');
    }

    public function destroy(Invoice $invoice)
    {
        $invoice->delete();

        return redirect()->route('invoice.index')->with('success', 'Invoice deleted successfully.');
    }
}