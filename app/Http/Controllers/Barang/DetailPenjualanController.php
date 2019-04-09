<?php

namespace App\Http\Controllers\Barang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\DetailPenjualan;
use App\Model\Penjualan;
use App\Model\Barang;

class DetailPenjualanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $d['detailPenjualans'] = DetailPenjualan::orderby('id','DESC')->get();
        return view('barang.detailPenjualan.index', $d);
    }
    public function add(){
        $d['penjualans'] = Penjualan::orderby('id', 'DESC')->get();
        $d['barangs'] = Barang::orderBy('id', 'DESC')->get();
        return view('barang.detailPenjualan.add', $d);
    }
    public function save(Request $r){
        $detailBarang = new DetailPenjualan;
        $detailBarang->id_penjualan = $r->input('id_penjualan');
        $detailBarang->id_barang = $r->input('id_barang');
        $detailBarang->jumlah = $r->input('jumlah');
        $detailBarang->sub_total = $r->input('sub_total');

        $detailBarang->save();
        return redirect()->route('detailPenjualanIndex')->with('alertTambah', "......");
    }
    public function edit($id){
        $d['penjualans'] = Penjualan::orderby('id', 'DESC')->get();
        $d['barangs'] = Barang::orderBy('id', 'DESC')->get();
        $d['detailPenjualans'] = DetailPenjualan::find($id);
        return view('barang.detailPenjualan.edit', $d);
    }
    public function update(Request $r, $id){
        $detailBarang = DetailPenjualan::find($id);
        $detailBarang->id_penjualan = $r->input('id_penjualan');
        $detailBarang->id_barang = $r->input('id_barang');
        $detailBarang->jumlah = $r->input('jumlah');
        $detailBarang->sub_total = $r->input('sub_total');

        $detailBarang->save();
        return redirect()->route('detailPenjualanIndex')->with('alertEdit', "......");
    }
    public function delete($id){
        $detailBarang = DetailPenjualan::find($id);
        $detailBarang->delete();
        return redirect()->route('detailPenjualanIndex')->with('alertHapus', "......");
    }
}
