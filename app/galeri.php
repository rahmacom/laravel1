<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class galeri extends Model
{
    use SoftDeletes;

   protected $fillable = ['nama','keterangan','path','users_id','kategori_galeri_id'];
   protected $table = 'galeri';
}
