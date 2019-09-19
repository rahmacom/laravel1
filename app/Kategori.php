<?php

namespace App;

use Illuminate\Notification\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $table ='kategori';
    
    protected $fillable = [
        'name', 'keterangan', 'user_id',
    ];
}
