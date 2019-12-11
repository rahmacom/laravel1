<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table_Mahasiswa extends Model
{
    protected $fillable = ['nim','nama','alamat','id_table_prodi'];

    protected $table = 'Table_Mahasiswa';

public function Prodi()
	{
		return $this->belongsTo('App\Prodi');
	}
}

