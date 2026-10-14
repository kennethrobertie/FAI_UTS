<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = "toko";
    protected $connection = "mysql";
    protected $primaryKey = 'toko_id';
    public $incrementing = true;
    public $timestamps = false;

    public function Owner()
    {
        return $this->belongsTo(Users::class, 'toko_owner', 'username');
    }

    public function Books()
    {
        /**
         * KHUSUS RELASI MANY TO MANY
         * 
         * 1. Saya sebagai toko ($this)
         * 2. Relasinya adalah HATI-HATI, KALAU MANY TO MANY, MAKA KITA PAKAI belongsToMany (bukan yang lain)
         * 3. Target nya itu adalah 
         * ----- Step pembuktiannya kita sedikit beda dengan relasi 1-1 1-M
         * 4. Buktinya lihat tabel pivot kita (toko_book)
         * 5. Bukti bahwa saya (toko) terhubung dengan pivot (toko_book) ada di kolom toko_id
         * 6. Bukti bahwa target (book) terhubung dengan pivot (toko_book) ada di kolom book_id
         */

        return $this->belongsToMany(Book::class, 'toko_book', 'toko_id', 'book_id')
            ->withPivot('tb_id', 'tb_stok')
            // ->wherePivot('tb_stok', '>', 90)
            ->orderByPivot('tb_stok', 'desc')
            ->as('aliaspivot');
    }
}
