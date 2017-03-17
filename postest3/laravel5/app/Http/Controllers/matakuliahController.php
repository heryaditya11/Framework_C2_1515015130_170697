<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\matakuliah;

class matakuliahController extends Controller
{
     public function awal(){

	
	return "Hello dari matakuliahController";
}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$matakuliah = new matakuliah();
		$matakuliah->title_matakuliah = 'hery aditya';
		$matakuliah->keterangan_matakuliah = 'kuliah baru';
		$matakuliah->save();
		return "data dengan username ($matakuliah->title_matakuliah) table disimpan";
	}
}
