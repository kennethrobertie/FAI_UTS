<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Supplier extends Authenticatable
{
    protected $connection = "koneksi_supp";
    protected $table = "supplier";
    protected $primaryKey = 'supp_id';
    public $incrementing = true;
    public $timestamps = false;


    /**
     * 1. Pastikan model kita bukan lagi extends Model, tapi extends Authenticable
     */
}
