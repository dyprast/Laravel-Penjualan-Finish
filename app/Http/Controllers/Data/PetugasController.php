<?php

namespace App\Http\Controllers\Data;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Petugas;

class PetugasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $d['petugas'] = Petugas::orderby('id', 'DESC')->get();
        return view('data.petugas.index', $d);
    }
    public function add(){
        return view('data.petugas.add');
    }
    public function save(Request $r){
        $petugas = new Petugas;
        $petugas->nama = $r->input('nama');
        $petugas->alamat = $r->input('alamat');
        $petugas->email = $r->input('email');
        $petugas->telp = $r->input('telp');

        $petugas->save();
        return redirect()->route('petugasIndex')->with('alertTambah', $r->input('nama'));
    }
    public function edit($id){
        $d['petugas'] = Petugas::find($id);
        return view('data.petugas.edit', $d);
    }
    public function update(Request $r, $id){
        $petugas = Petugas::find($id);
        $petugas->nama = $r->input('nama');
        $petugas->alamat = $r->input('alamat');
        $petugas->email = $r->input('email');
        $petugas->telp = $r->input('telp');

        $petugas->save();
        return redirect()->route('petugasIndex')->with('alertEdit', $r->input('nama'));
    }
    public function delete($id){
        $petugas = Petugas::find($id);
        $nama = $petugas->nama;
        $petugas->delete();
        return redirect()->route('petugasIndex')->with('alertHapus', $nama);
    }
}
