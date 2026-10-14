<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = "genre";
    protected $connection = "mysql";
    protected $primaryKey = 'genre_id';
    public $incrementing = false;
    public $timestamps = false;

    public function Books()
    {
        // Saya berpacaran dengan Papan Tulis, memberikan bukti misalnya buku nikah
        /**
         * 1. Saya? Genre ($this) 
         * 2. berpacaran? punya banyak buku hasMany
         * 3. papan tulis? target? Book::class
         * 4. Buktinya primary ketemu foreign key
         */
        /**
         * hasMany kembaliannya PASTI ARRAY
         */
        return $this->hasMany(Book::class, 'genre_id', 'genre_id');
    }
}

/**
 * Book book_genre_id (FK)
 * Genre genre_id (PK)
 * 
 * return $this->hasMany(Book::class, 'book_genre_id', 'genre_id');
 * return $this->hasMany(Book::class, 'genre_id',      'book_genre_id');
 * ga usah dihapalin, tinggal bolak balik aja, dicoba di controller
 */
