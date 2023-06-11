<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Outlet extends Model
{
    use Notifiable;
    protected $table = "outlet";
    protected $fillable = [
        'name',
        'address',
    ];

    protected $primaryKey = 'id';
}
