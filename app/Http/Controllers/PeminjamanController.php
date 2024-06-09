<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\User;
use App\Models\peminjaman;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PeminjamanController extends Controller
{
    public function peminjaman($id)
    {
        $buku = buku::findOrfail($id);   
        return view ('peminjaman', compact('buku'));
    
    }

    public function hasilPeminjaman(){
        return view('hasilPeminjaman');
    }

    public function pengingatKembaliPeminjaman()
    {
        $peminjaman = peminjaman::where('status_buku', 'dipinjam')->get();
        return view('pengingatKembaliPeminjaman')->with(['peminjaman'=>$peminjaman]);
    }

  

    public function pengajuanPeminjaman(Request $request){

        $idBuku = $request->id;

        $buku = buku::findOrfail($idBuku);

        $kodePeminjaman = $this->generateCodeUniqueCode();


        $date = Carbon::createFromFormat('Y-m-d', $request->tanggalSelesai)->setTime(now()->hour, now()->minute, now()->second)->setTimezone('Asia/Makassar');

     

        $peminjaman = new peminjaman;

        $peminjaman->kode_peminjaman = $kodePeminjaman;
        $peminjaman->nama_buku = $request->namaBuku;
        $peminjaman->nama_peminjam = $request->namaPeminjam;
        $peminjaman->nim = $request->nim;
        $peminjaman->tanggal_mulai = $request->tanggalMulai;
    $peminjaman->gambar = $request->gambar;
        $peminjaman->tanggal_selesai = $date;

        $buku->stokBuku -= 1;

        $buku->save();

        $peminjaman->save();   
        session(['kodePeminjaman' => $kodePeminjaman]);


        return redirect()->route('hasilPeminjaman');
    }

    public function generateCodeUniqueCode(){
        $kodePeminjaman = random_int(1000, 9999);

        while(peminjaman::where('kode_peminjaman', $kodePeminjaman)->exists()){
            $kodePeminjaman = random_int(1000, 9999);
        }

        return $kodePeminjaman;
    }

    public function updateStatusPeminjaman($id){
        
        $status = peminjaman::find($id);

        
        $status->delete();



        Session::flash('berhasil', 'Buku berhasil dikembalikan');

        return redirect('tabelPeminjam');


    }
}
