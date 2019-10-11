<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori_artikel extends Model
{
    use SoftDeletes;

    protected $fillable = ['nama','users_id','created_at','update_at'];
    protected $table = 'kategori_artikel';
}
