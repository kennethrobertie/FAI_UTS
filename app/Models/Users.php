<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    protected $table = "users";
    protected $connection = "mysql";
    protected $primaryKey = 'username';
    public $incrementing = false;
    public $timestamps = false;

    public function Toko()
    {
        // balik saja kalau ketemunya NULL
        // return $this->hasOne(Toko::class, 'username', 'toko_owner'); // salah
        // return $this->hasOne(Toko::class, 'toko_owner', 'username'); // benar
        return $this->belongsTo(Toko::class, 'username', 'toko_owner'); // benar
    }
}
