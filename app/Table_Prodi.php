<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table_Prodi extends Model
{
    protected $fillable = ['kode','nama'];

    protected $table = 'Table_Prodi';
}
