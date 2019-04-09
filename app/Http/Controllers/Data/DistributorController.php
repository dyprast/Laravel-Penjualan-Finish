<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Distributor;

class DistributorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $d['distributors'] = Distributor::orderby('id', 'DESC')->get();
        return view('data.distributor.index', $d);
    }
    public function add(){
        return view('data.distributor.add');
    }
    public function save(Request $r){
        $distributor = new Distributor;
        $distributor->nama = $r->input('nama');
        $distributor->kota_asal = $r->input('kota_asal');
        $distributor->alamat = $r->input('alamat');
        $distributor->email = $r->input('email');
        $distributor->telp = $r->input('telp');

        $distributor->save();
        return redirect()->route('distributorIndex')->with('alertTambah', $r->input('nama'));
    }
    public function edit($id){
        $d['distributors'] = Distributor::find($id);
        return view('data.distributor.edit', $d);
    }
    public function update(Request $r, $id){
        $distributor = Distributor::find($id);
        $distributor->nama = $r->input('nama');
        $distributor->kota_asal = $r->input('kota_asal');
        $distributor->alamat = $r->input('alamat');
        $distributor->email = $r->input('email');
        $distributor->telp = $r->input('telp');

        $distributor->save();
        return redirect()->route('distributorIndex')->with('alertEdit', $r->input('nama'));
    }
    public function delete($id){
        $distributor = Distributor::find($id);
        $nama = $distributor->nama;
        $distributor->delete();
        return redirect()->route('distributorIndex')->with('alertHapus', $nama);
    }
}
