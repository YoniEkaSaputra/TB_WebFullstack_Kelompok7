<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Barang extends Model
{
    use Notifiable;
    protected $table = "barang";
    protected $fillable = [
        'code',
        'name',
        'qty',
    ];

    protected $primaryKey = 'id';
}
