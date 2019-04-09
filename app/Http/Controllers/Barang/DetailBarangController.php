<?php

namespace App\Http\Controllers\Barang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DetailBarangMasuk;
use App\Model\BarangMasuk;
use App\Model\Barang;

class DetailBarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $d['detailBarangs'] = DetailBarangMasuk::orderby('id','DESC')->get();
        return view('barang.detailBarang.index', $d);
    }
    public function add(){
        $d['barangMasuks'] = BarangMasuk::orderBy('id', 'DESC')->get();
        $d['barangs'] = Barang::orderBy('id', 'DESC')->get();
        return view('barang.detailBarang.add', $d);
    }
    public function save(Request $r){
        $detailBarang = new DetailBarangMasuk;
        $detailBarang->id_barang_masuk = $r->input('id_barang_masuk');
        $detailBarang->id_barang = $r->input('id_barang');
        $detailBarang->jumlah = $r->input('jumlah');
        $detailBarang->sub_total = $r->input('sub_total');

        $detailBarang->save();
        return redirect()->route('detailBarangIndex')->with('alertTambah', "......");
    }
    public function edit($id){
        $d['detailBarangs'] = DetailBarangMasuk::find($id);
        $d['barangMasuks'] = BarangMasuk::orderBy('id', 'DESC')->get();
        $d['barangs'] = Barang::orderBy('id', 'DESC')->get();
        return view('barang.detailBarang.edit', $d);
    }
    public function update(Request $r, $id){
        $detailBarang = DetailBarangMasuk::find($id);
        $detailBarang->id_barang_masuk = $r->input('id_barang_masuk');
        $detailBarang->id_barang = $r->input('id_barang');
        $detailBarang->jumlah = $r->input('jumlah');
        $detailBarang->sub_total = $r->input('sub_total');

        $detailBarang->save();
        return redirect()->route('detailBarangIndex')->with('alertEdit', "......");
    }
    public function delete($id){
        $detailBarang = DetailBarangMasuk::find($id);
        $detailBarang->delete();
        return redirect()->route('detailBarangIndex')->with('alertHapus', "......");
    }
}
