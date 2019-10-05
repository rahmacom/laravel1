<?php

namespace App;

use Illuminate\Notification\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $fillable = ['name', 'keterangan', 'users_id'];

    protected $table ='kategori';
    
}
