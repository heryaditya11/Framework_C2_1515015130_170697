<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\mahasiswa;

class mahasiswaController extends Controller
{
     public function awal(){

	
	return "Hello dari mahasiswaController";
}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$mahasiswa = new mahasiswa();
		$mahasiswa->nama_mahasiswa = 'annisa';
		$mahasiswa->nim = '1515015133';
		$mahasiswa->alamat_mhs = 'jkt';
		$mahasiswa->pengguna_id = '2';
		$mahasiswa->save();
		return "data dengan username ($mahasiswa->nama_mahasiswa) table disimpan";
	}
}
