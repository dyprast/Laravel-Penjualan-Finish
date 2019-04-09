<?php

namespace App\Http\Controllers\Barang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Penjualan;
use App\Model\Petugas;

class PenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $d['penjualans'] = Penjualan::orderby('id', 'DESC')->get();
        return view('barang.penjualan.index', $d);
    }
    public function add(){
        $d['petugas'] = Petugas::orderBy('id', 'DESC')->get();
        return view('barang.penjualan.add', $d);
    }
    public function save(Request $r){
        $d = Penjualan::orderBy('id', 'DESC')->first();
        if(!empty($d->no_faktur)){
            $d1 = substr($d->no_faktur,2);
            $faktur = "FK".sprintf('%04d', $d1 + 1);
        }
        else{
            $faktur = "FK".sprintf('%04d', 1);
        }
        $penjualan = new Penjualan;
        $penjualan->no_faktur = $faktur;
        $penjualan->id_petugas = $r->input('id_petugas');
        $penjualan->tanggal_penjualan = $r->input('tanggal_penjualan');
        $penjualan->bayar = $r->input('bayar');
        $penjualan->sisa = $r->input('sisa');
        $penjualan->total = $r->input('total');

        $penjualan->save();
        return redirect()->route('penjualanIndex')->with('alertTambah', "......");
    }
    public function edit($id){
        $d['penjualans'] = Penjualan::find($id);
        $d['petugas'] = Petugas::orderBy('id', 'DESC')->get();
        return view('barang.penjualan.edit', $d);
    }
    public function update(Request $r, $id){
        $penjualan = Penjualan::find($id);
        $penjualan->id_petugas = $r->input('id_petugas');
        $penjualan->tanggal_penjualan = $r->input('tanggal_penjualan');
        $penjualan->bayar = $r->input('bayar');
        $penjualan->sisa = $r->input('sisa');
        $penjualan->total = $r->input('total');

        $penjualan->save();
        return redirect()->route('penjualanIndex')->with('alertEdit', "......");
    }
    public function delete($id){
        $penjualan = Penjualan::find($id);
        $tanggal_penjualan = $penjualan->tanggal_penjualan;
        $penjualan->delete();
        return redirect()->route('penjualanIndex')->with('alertHapus', "......");
    }
}
