<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable([
    'title',
    'price',
    'author',
    'tahun',
    'genre_id'
])]
class Book extends Model
{
    // MENGAKTIFKAN FITUR SOFT DELETE, SYARAT : DI TABEL HARUS ADA KOLOM deleted_at
    use SoftDeletes;


    // php artisan make:model Book
    // 1. Laravel berasumsi nama table kita pasti <nama model>s = books
    protected $table = "book";

    // 2. Laravel berasumsi TABLE kita pasti ada DEFAULT CONNECTION
    protected $connection = "mysql";

    // 3. Laravel berasumsi PRIMARY KEY kita pakai nama kolom "id"
    protected $primaryKey = 'id';

    // 4. Laravel berasumsi PRIMARY KEY kita PASTI pakai auto increment
    public $incrementing = true;

    // 5. Laravel berasumsi table kita pasti punya timestamps (created_at, updated_at)
    public $timestamps = true;

    // // cara lama buat fillable
    // protected $fillable = [
    //     'title',
    //     'price',
    //     'author',
    //     'tahun',
    //     'genre_id'
    // ];

    public function Genre()
    {
        /**
         * belongsTo atau hasOne itu KEMBALIANNYA PASTI HANYA 1 DATA SAJA
         */

        // ini boleh
        // return $this->hasOne(Genre::class, 'genre_id', 'genre_id');

        // ini juga boleh
        return $this->belongsTo(Genre::class, 'genre_id', 'genre_id');
    }

    public function Tokos()
    {
        return $this->belongsToMany(Toko::class, 'toko_book', 'book_id', 'toko_id');
    }
}

/**
 * Book book_genre_id (FK)
 * Genre genre_id (PK)
 * 
 * return $this->hasOne(Genre::class, 'book_genre_id', 'genre_id');
 * return $this->belongsTo(Genre::class, 'genre_id', 'book_genre_id');
 * 
 * atau
 * 
 * return $this->hasOne(Genre::class, 'genre_id', 'book_genre_id');
 * return $this->belongsTo(Genre::class, 'book_genre_id', 'genre_id');
 * 
 * ga usah dihapalin, tinggal bolak balik aja, dicoba di controller
 */
