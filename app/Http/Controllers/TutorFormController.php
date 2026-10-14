<?php

namespace App\Http\Controllers;

use App\Rules\CekKodeBukuValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TutorFormController extends Controller
{
    public function index(Request $request)
    {
        $daftarBuku = Session::get('daftarBuku');

        return view('tutorform.buku', compact('daftarBuku'));
    }

    public function store(Request $request)
    {
        // validasi inputan yang dimasukkan oleh user
        // $request->validate([
        //     'buku_nama' => 'required',
        //     'my_email' => 'required|email',
        //     'tahun_terbit' => 'required|integer|min:1990|digits:4',
        //     'pengarang_nama' => 'required',
        //     'katakunci' => 'required|confirmed',
        //     'buku_kode' => ['required', new CekKodeBukuValidation],
        // ], [
        //     'my_email.required' => 'Isian :attribute Harus Diisi',
        // ], [
        //     'my_email' => 'Email kamu',
        // ]);

        // echo 'inputan siap dipakai';
        // dump($request->all());
        // dump($request->buku_nama);
        // dump($request->only(['buku_nama', 'tahun_terbit']));
        // dump($request->except(['katakunci', 'katakunci_confirmation']));

        // Session::push('daftarBuku',$request->only(['buku_nama', 'tahun_terbit']));
        $bukuBaru = [
            'buku_nama' => $request->buku_nama,
            'tahun_terbit' => $request->tahun_terbit,
        ];
        Session::push('daftarBuku', $bukuBaru);

        // return redirect('/tutorform/buku');
        // return back();
        // ->with() adalah session flash, session yang hanya berlaku di next request saja
        return redirect()->back()->with('pesan', 'Berhasil Memasukkan Buku Baru!');
    }

    public function destroy(Request $request)
    {
        $data = Session::get('daftarBuku');
        unset($data[$request->id]); // array yang sudah terhapus salah satu datanya, indexnya loncat
        // array_values untuk merapikan indexnya
        Session::put('daftarBuku', array_values($data));

        return redirect()->back();
    }

    public function show(Request $request)
    {
        $idyangdiubah = $request->id;
        $datalama = Session::get('daftarBuku')[$idyangdiubah];

        return view('tutorform.edit', compact('idyangdiubah', 'datalama'));
    }

    public function update(Request $request)
    {
        $datalama = Session::get('daftarBuku');
        $id = $request->id;

        $datalama[$id]['buku_nama'] = $request->buku_nama;
        $datalama[$id]['tahun_terbit'] = $request->tahun_terbit;

        Session::put('daftarBuku', array_values($datalama));

        return redirect('tutorform/buku');
    }

    public function buat(Request $request)
    {
        $username = ['jojo', 'bruno', 'kujo'];

        // json_encode mengubah array menjadi string
        return redirect('/tutorform/sessioncookie/baca')->withCookie(cookie('username', json_encode($username), 60));
        // echo 'Untuk Buat Session dan Cookie';
        // // session()->put('dosen', 'Bruno');
        // // $request->session()->put('dosen', 'Bruno');
        // Session::put('dosen', 'Bruno');

        // // buat session dalam bentuk array biasa
        // $kelasmhs = [];
        // $mhs1 = [
        //     'nama' => 'Jojo',
        //     'umur' => 45,
        // ];
        // $kelasmhs[] = $mhs1;
        // $mhs2 = [
        //     'nama' => 'Jolyne',
        //     'umur' => 65,
        // ];
        // $kelasmhs[] = $mhs2;
        // Session::put('kelasmhs', $kelasmhs);

        // $mhs3 = [
        //     'nama' => 'Kujo Jotaro',
        //     'umur' => 65,
        // ];
        // Session::push('kelasmhs', $mhs3);

        // $mhs4 = [
        //     'nama' => 'Abachio',
        //     'umur' => 65,
        // ];
        // Session::push('kelasmhs.inf', $mhs4);
        // $mhs5 = [
        //     'nama' => 'Narancia',
        //     'umur' => 65,
        // ];
        // Session::push('kelasmhs.inf', $mhs5);
        // $mhs6 = [
        //     'nama' => 'Abdul',
        //     'umur' => 65,
        // ];
        // Session::push('kelasmhs.dkv.2026', $mhs6);
    }

    public function baca(Request $request)
    {
        dump($request->cookie('username', 'Tidak ada cookie'));
        $hasilcookie = $request->cookie('username');
        dump(json_decode($hasilcookie));
        // // session()->get('dosen');
        // // $request->session()->get('dosen');
        // if (! Session::has('dosen')) {
        //     echo 'Tidak ada session untuk dosen';
        // }
        // dump(Session::get('dosen', 'Session dosen belum dibuat'));
        // dump(Session::get('kelasmhs', 'Session kelas belum dibuat'));
        // dump(Session::get('kelasmhs.dkv.2026.0.nama', 'Session mhs dkv 2026 pertama belum dibuat'));
    }

    public function hapus(Request $request)
    {
        return redirect('/tutorform/sessioncookie/baca')->withoutCookie('username');
        // echo 'Hapus session';
        // Session::remove('dosen');
        // Session::remove('kelasmhs.dkv.2026.0');

        // // menghapus semua session
        // Session::flush();
    }
}
