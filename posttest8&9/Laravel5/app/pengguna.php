<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model implements AuthenticatableContract
{
	use Authenticatable;
	protected $table = 'pengguna';
	protected $guarded = ['id'];

}
	// protected $table ='pengguna';
	// protected $fillable =['username','password'];

	// public function mahasiswa(){
	// 	return $this->hasOne(mahasiswa::class);
	// }

	// public function dosen(){
	// 	return $this->hasOne(dosen::class);
	// }
	// /*
// 	public function peran(){
// 		return $this ->belongsToMany(peran::class);
// 	}
// 	*/
// }
