<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosenController extends Controller
{
     public function awal(){

	
	return "Hello dari dosenController";
}
	public function tambah()
	{
		return $this->simpan();
	}
	public function simpan()
	{
		$dosen = new dosen();
		$dosen->nama_dosen = 'mery';
		$dosen->nip = '1515015312';
		$dosen->alamat = 'samarinda';
		$dosen->pengguna_id = '1';
		$dosen->save();
		return "data dengan username ($dosen->nama_dosen) table disimpan";
	}
}
