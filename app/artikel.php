<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class artikel extends Model
{
    use SoftDeletes;

    protected $fillable = ['judul','isi','users_id','kategori_artikel_id'];
    protected $table = 'artikel';
}
