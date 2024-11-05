<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        $penggunas = Pengguna::paginate(2);
        return view('home', compact('penggunas'));
    }

    public function create()
    {
        return view('pengguna.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tanggal_faktur' => 'required',
            'nomor_faktur' => 'required',
            'no_npwp' => 'required',
            'supplier' => 'required',
            'keterangan' => 'required',
            'jumlah_pembelian' => 'required',
            'ppn' => 'required',
            'total_tagihan' => 'required'
        ]);

        Pengguna::create([
            'tanggal_faktur' => $request->get('tanggal_faktur'),
            'nomor_faktur' => $request->get('nomor_faktur'),
            'no_npwp' => $request->get('no_npwp'),
            'supplier' => $request->get('supplier'),
            'keterangan' => $request->get('keterangan'),
            'jumlah_pembelian' => $request->get('jumlah_pembelian'),
            'ppn' => $request->get('ppn'),
            'total_tagihan' => $request->get('total_tagihan')
        ]);

        return redirect()->back()->with('message', 'Pajak berhasil dibuat');
    }

    public function edit($id)
    {
        $pengguna = Pengguna::find($id);
        return view('pengguna.edit', compact('pengguna'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tanggal_faktur' => 'required',
            'nomor_faktur' => 'required',
            'no_npwp' => 'required',
            'supplier' => 'required',
            'keterangan' => 'required',
            'jumlah_pembelian' => 'required',
            'ppn' => 'required',
            'total_tagihan' => 'required'
        ]);

        $pengguna = Pengguna::find($id); // Temukan model Pengguna dengan ID
        if (!$pengguna) {
            return redirect()->route('pengguna.index')->with('error', 'Pajak item not found.');
        }

        $pengguna->tanggal_faktur = $request->get('tanggal_faktur');
        $pengguna->nomor_faktur = $request->get('nomor_faktur');
        $pengguna->no_npwp = $request->get('no_npwp');
        $pengguna->supplier = $request->get('supplier');
        $pengguna->keterangan = $request->get('keterangan');
        $pengguna->jumlah_pembelian = $request->get('jumlah_pembelian');
        $pengguna->ppn = $request->get('ppn'); // Perbaikan pada kolom ppn
        $pengguna->total_tagihan = $request->get('total_tagihan');
        $pengguna->save();

        return redirect()->route('pengguna.index')->with('message', 'Pajak berhasil diupdate');
    }

    public function destroy($id)
    {
        $pengguna = Pengguna::find($id);
        if (!$pengguna) {
            return redirect()->route('pengguna.index')->with('error', 'Pajak item not found.');
        }

        $pengguna->delete();
        return redirect()->route('pengguna.index')->with('message', 'Pajak item deleted successfully.');
    }
}
