<?php

namespace App\Http\Controllers\Barang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\BarangMasuk;
use App\Model\Distributor;
use App\Model\Petugas;

class BarangMasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $d['barang_masuks'] = BarangMasuk::orderby('id', 'DESC')->get();
        return view('barang.barangMasuk.index', $d);
    }
    public function add(){
        $d['distributors'] = Distributor::orderby('id', 'DESC')->get();
        $d['petugas'] = Petugas::orderby('id', 'DESC')->get();
        return view('barang.barangMasuk.add', $d);
    }
    public function save(Request $r){
        $d = BarangMasuk::orderBy('id', 'DESC')->first();
        if(!empty($d->no_nota)){
            $d1 = substr($d->no_nota,2);
            $nota = "BM".sprintf('%04d', $d1 + 1);
        }
        else{
            $nota = "BM".sprintf('%04d', 1);
        }
        $barangMasuk = new BarangMasuk;
        $barangMasuk->no_nota = $nota;
        $barangMasuk->tanggal_masuk = $r->input('tanggal_masuk');
        $barangMasuk->id_distributor = $r->input('id_distributor');
        $barangMasuk->id_petugas = $r->input('id_petugas');
        $barangMasuk->total = $r->input('total');

        $barangMasuk->save();
        return redirect()->route('barangMasukIndex')->with('alertTambah', $nota);
    }
    public function edit($id){
        $d['barang_masuks'] = BarangMasuk::find($id);
        $d['distributors'] = Distributor::orderby('id', 'DESC')->get();
        $d['petugas'] = Petugas::orderby('id', 'DESC')->get();
        return view('barang.barangMasuk.edit', $d);
    }
    public function update(Request $r, $id){
        $barangMasuk = BarangMasuk::find($id);
        
        $no_nota = $barangMasuk->no_nota;

        $barangMasuk->tanggal_masuk = $r->input('tanggal_masuk');
        $barangMasuk->id_distributor = $r->input('id_distributor');
        $barangMasuk->id_petugas = $r->input('id_petugas');
        $barangMasuk->total = $r->input('total');

        $barangMasuk->save();
        return redirect()->route('barangMasukIndex')->with('alertEdit', $no_nota);
    }
    public function delete($id){
        $barangMasuk = BarangMasuk::find($id);
        $no_nota = $barangMasuk->no_nota;
        $barangMasuk->delete();
        return redirect()->route('barangMasukIndex')->with('alertHapus', $no_nota);
    }
}
