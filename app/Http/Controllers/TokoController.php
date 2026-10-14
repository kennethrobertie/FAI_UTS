<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Toko;
use App\Models\Users;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index(Request $request)
    {
        /**
         * find -> cari berdasarkan primary key
         * get -> ambil semua data
         * first -> ambil data yang paling pertama
         * all -> mirip sama get
         */

        $user = Users::find('mimi');
        // $toko = $user->Toko() // hati2 lihat disini kalau ada (), kembaliannya adalah RELASINYA, BUKAN OBJECT OF MODEL TOKO
        $toko = $user->Toko;
        $daftarBuku = Book::all();
        return view('toko.index', compact('user', 'toko', 'daftarBuku'));
    }

    public function proses(Request $request)
    {
        /**
         * 1. Cari dulu buku
         * 2. Cari dulu toko
         * 3. Sambungkan ke dua data ini 
         *      - toko -> book
         *      - book -> toko
         *      Wajib diingat yang sebelah kiri HARUS PUNYA BELONGSTOMANY
         * 4. Step:
         *      - saya
         *      - panggil function relasinya
         *      - sambungkan / attach
         *      - target
         *      - kalau ada data lain jangan lupa dipasang juga
         */

        $toko = Toko::find($request->toko_id);
        $book = Book::find($request->id);

        // cek bukunya udah ada belum?
        $cekBuku = $toko->Books()->where('book_id', $book->id)->first();

        if ($cekBuku == null) {
            // cara untuk melakukan insert ke dalam pivot kita
            // HATI-HATI FUNCTION RELASINYA JADI WAJIB ADA (), misal Books()
            $toko->Books()->attach($book, ["tb_stok" => $request->tb_stok]);
        } else {
            // untuk update
            $stokBaru = $request->tb_stok + $cekBuku->aliaspivot->tb_stok;
            $toko->Books()->updateExistingPivot($book, ["tb_stok" => $stokBaru]);
        }

        return back();
    }

    public function hapus(Request $request)
    {
        $toko = Toko::find($request->toko_id);
        $book = Book::find($request->book_id);
        $toko->Books()->detach($book);
        return back();
    }
}
