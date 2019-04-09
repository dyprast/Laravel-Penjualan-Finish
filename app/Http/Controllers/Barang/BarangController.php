<?php

namespace App\Http\Controllers\Barang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Barang;
use App\Model\JenisBarang;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $d['barangs'] = Barang::orderby('id', 'DESC')->get();
        return view('barang.barang.index', $d);
    }
    public function add(){
        $d['jenis_barangs'] = JenisBarang::orderBy('id', 'DESC')->get();
        return view('barang.barang.add', $d);
    }
    public function save(Request $r){
        $barang = new Barang;
        $barang->id_jenis_barang = $r->input('id_jenis_barang');
        $barang->nama_barang = $r->input('nama_barang');
        $barang->harga_net = $r->input('harga_net');
        $barang->harga_jual = $r->input('harga_jual');
        $barang->stok = $r->input('stok');

        $barang->save();
        return redirect()->route('barangIndex')->with('alertTambah', $r->input('nama_barang'));
    }
    public function edit($id){
        $d['barangs'] = Barang::find($id);
        $d['jenis_barangs'] = JenisBarang::orderBy('id', 'DESC')->get();
        return view('barang.barang.edit', $d);
    }
    public function update(Request $r, $id){
        $barang = Barang::find($id);
        $barang->id_jenis_barang = $r->input('id_jenis_barang');
        $barang->nama_barang = $r->input('nama_barang');
        $barang->harga_net = $r->input('harga_net');
        $barang->harga_jual = $r->input('harga_jual');
        $barang->stok = $r->input('stok');

        $barang->save();
        return redirect()->route('barangIndex')->with('alertEdit', $r->input('nama_barang'));
    }
    public function delete($id){
        $barang = Barang::find($id);
        $nama_barang = $barang->nama_barang;
        $barang->delete();
        return redirect()->route('barangIndex')->with('alertHapus', $nama_barang);
    }
}
