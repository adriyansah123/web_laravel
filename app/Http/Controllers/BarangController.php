<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
	public function index(){
		
		// file Barang terdapat pada folder resource
		$var = 'PC';
				// SELECT * FROM tbl_Barang
		$data = Barang::all();
//		dd($data);
		return view('Barang.index', compact('var', 'data'));
	}

	public function create(){
		return view('Barang.tambah');
	}

	public function store(Request $barang){
		// INSERT INTO tbl_barang () VALUES ();
		Barang::create($barang->all());
		return redirect('barang');
	}

	public function edit($id){
				//select * from Barang where id=$id
		$brg = Barang::find($id);
		return view('Barang.ubah', compact('brg'));
	}

	public function update(Request $barang, $id){
		$brg = $barang->all();
		// UPDATE tbl_mahasiwa SET nama_kolom=$brg
		Barang::find($id)->update($brg);
		return redirect('barang');
	}

	public function destroy($id){
		// Delete from tbl_Barang where id=$id
		Barang::find($id)->delete();
		return redirect('barang');
	}
}