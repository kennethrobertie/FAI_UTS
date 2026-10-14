<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Toko;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TutorDB extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /**
         * Coba coba relationship
         */

        // ================================================
        $toko = Toko::find(1);
        // dump($toko->Owner->Toko->Owner->username);


        $contohGenre = Genre::find('G01');
        // dd($contohGenre->Books);
        // misal disuruh tampilkan semua berarti tinggal for
        foreach ($contohGenre->Books as $key => $value) {
            echo $value->title . "|";
        }

        // ================================================


        $keyword = "for";
        $order = 1;
        $awal = 1999;
        $akhir = 2026;
        $contohsusah = Book::from("book as b")
            ->select(['id', 'title', 'price', 'author', 'tahun', 'b.genre_id', 'g.genre_nama'])
            ->selectRaw("(case when tahun < ? then 'lama'
                                else 'baru'
                                end) as keterangan", [2003]) //selectRaw harus setelah select
            ->join('genre as g', 'g.genre_id', '=', 'b.genre_id')
            // ->where('b.genre_id', '!=', 'G01')
            // ->where('title', 'like', "%$keyword%")
            // ->orWhere("price", "<", 10)
            ->where(function ($query) use ($awal, $akhir) {
                $query->where('tahun', '<=', $awal)->orWhere('tahun', '>=', $akhir);
            })
            ->offset(2)
            ->limit(5);
        // dd($contohsusah->get());

        // Select * from book where deleted_at = null order by id desc
        // $daftarBuku = Book::orderBy('id', 'desc')->get();

        // Select * from book where order by id desc
        $daftarBuku = Book::withTrashed()->orderBy('id', 'desc')->get();

        // select * from genre
        $daftarGenre = Genre::get();
        return view('tutordb.buku', compact('daftarBuku', 'daftarGenre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Cara insert dengan satu persatu kolom
        // $result = new Book();
        // $result->title = $request->title;
        // $result->price = $request->price;
        // $result->genre_id = $request->genre_id;
        // $result->author = $request->author;
        // $result->tahun = $request->tahun;
        // $result->save();

        // cara insert yang kedua (sedikit lebih cepat)
        // $result = Book::create([
        //     'title' => $request->title,
        //     'price' => $request->price,
        //     'genre_id' => $request->genre_id,
        //     'author' => $request->author,
        //     'tahun' => $request->tahun,
        // ]);

        /**
         * cara insert yang ketiga (paling cepet untuk pratikum dan ujian)
         * 
         * Syarat:
         * 1. Semua name untuk semua input, HARUS SAMA DENGAN NAMA KOLOM DI DATABASE
         */
        $result = Book::create($request->all());

        if ($result) {
            return redirect()->back()->with('pesan', 'Sukses insert buku');
        } else {
            return redirect()->back()->with('pesan', 'Gagal insert buku');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $dataLama = Book::withTrashed()->where('id', '=', $request->id)->first();
        $daftarGenre = Genre::get();
        return view('tutordb.edit', compact('dataLama', 'daftarGenre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $bukuyangmaudiubah = Book::withTrashed()->find($request->id);
        $result = $bukuyangmaudiubah->update($request->all());
        if ($result) {
            return redirect('tutordb')->with('pesan', 'Sukses ubah buku');
        } else {
            return redirect('tutordb')->with('pesan', 'Gagal ubah buku');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $idHapus = $request->id;
        $bukuyangmaudihapus = Book::withTrashed()->find($request->id);
        if ($bukuyangmaudihapus->trashed()) {
            $result = $bukuyangmaudihapus->restore();
        } else {
            $result = $bukuyangmaudihapus->delete();
        }

        if ($result) {
            return redirect()->back()->with('pesan', 'Sukses hapus buku');
        } else {
            return redirect()->back()->with('pesan', 'Gagal hapus buku');
        }
    }
}

/**
 * DELETE FROM BOOK WHERE id = 67;
 * UPDATE BOOK set deleted_at=NOW() where id=67 and deleted_at=null;
 * 
 * SELECT * FROM BOOK;
 * SELECT * FROM BOOK where deleted_at=null;
 */
