<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\Category;
use App\Models\peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class DasboardadminController extends Controller
{
    public function index()
    {
        $countUser = user::where('role', 2)->count();
        $countBuku = buku::all()->count();
        $countKategori = Category::all()->count();
        $countPeminjam = peminjaman::all()->count();

        return view('dashboardadmin')->with(['user' => $countUser, 'buku' => $countBuku, 'kat' => $countKategori, 'peminjam' => $countPeminjam]);
    }


    public function store_buku(Request $request)
    {
        $request->validate(
            [
               
                'sampul' => 'mimes:jpeg,png,jpg|max:2048',
                'stok' => 'required|numeric|max:999',

            ],
            [
                'sampul.max' => 'File Tidak Boleh Lebih Dari 2MB',
                'sampul.mimes' => 'Format File Harus jpeg,png,jpg',
                'stok.max' => 'Jumlah produk tidak boleh lebih dari 100.',
            ]
        );

        if ($request->hasFile('sampul')) {
            $sampul = $request->file('sampul')->store('uploads/sampul_buku');
        } else {
            $sampul = 'gambar kosong bang';
        }

        $buku = new buku();
        $buku->judul = $request->namaBuku;
        $buku->stokBuku = $request->stok;
        $buku->Penerbit = $request->penerbit;
        $buku->Penulis = $request->penulis;
        $buku->kategori = $request->kategori;
        $buku->sampul = $sampul;
        $buku->Deskripsi = $request->deskripsi;
        $buku->save();


        Session::flash('tambah', 'Berhasil menahbakan buku baru');
        return redirect('tabelBuku')->with('success', 'Task Created Successfully!');
    }

    public function peminjamanAdmin()
    {
        $peminjaman = peminjaman::all();
        return view('components.admin.peminjamanAdmin')->with(['peminjaman' => $peminjaman]);
    }


    public function tabelBuku()
    {
        $buku = buku::all();
        return view('components.admin.tabelBuku')->with(['buku' => $buku]);
    }


    public function tabelUser()
    {
        $user = User::where('role', 2)->get();
        return view('components.admin.tabelUser')->with(['user' => $user]);
    }


    public function createBuku()
    {
        $kategori = Category::all();
        return view('components.admin.createBuku')->with(['kategori' => $kategori]);;
    }

    public function editBuku(Request $request)
    {
        $id = $request->id;
        $buku = buku::find($id);

        $request->validate(
            [
                'gambar' => 'mimes:jpeg,png,jpg|max:2048',
                'stok' => 'required|numeric|max:999',


            ],
            [
                'gambar.max' => 'gambar Tidak Boleh Lebih Dari 2MB',
                'gambar.mimes' => 'Format File Harus jpg, png, jpeg',
                'stok.max' => 'maximal jumlah produk 999.',

            ]
        );
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('uploads/sampul_buku');

            $pathFile = $buku->sampul;

            if ($pathFile != null || $pathFile != '') {
                Storage::delete($pathFile);
            }
        } else {
            $path = $buku->sampul;
        }

        // $buku = new buku();
        $buku->judul = $request->namaBuku;
        $buku->stokBuku = $request->stok;
        $buku->Penerbit = $request->penerbit;
        $buku->Penulis = $request->penulis;
        $buku->kategori = $request->kategori;
        $buku->sampul = $path;
        $buku->Deskripsi = $request->deskripsi;
        $buku->save();

        Session::flash('update', 'berhasil mengupdate buku');



        return redirect()->route('tabelBuku');
    }

    public function updateBuku($id)
    {
        $kategori = Category::all();
        $buku = buku::findOrFail($id);
        return view('components.admin.updateBuku', compact('buku', 'kategori'));
    }

    public function deleteBuku($id)
    {
        $data = buku::find($id);
        $pathfile = $data->sampul;
        Storage::delete($pathfile);
        $data->delete();

        Session::flash('delete', 'berhasil menghapus buku');
        return redirect()->route('tabelBuku')->with('sucess', 'data berhasil dihapus');
    }
    public function deleteUser($id)
    {
        $data = User::find($id);
        $pathfile = $data->profile;
        Storage::delete($pathfile);
        $data->delete();
        Session::flash('deleteUser', 'User berhasil dihapus');
        return redirect()->route('tabelUser')->with('sucess', 'data berhasil dihapus');
    }

    public function tampilKategori()
    {
        $kategori = Category::all();
        return view('components.admin.kategoriBuku')->with(['kategori' => $kategori]);
    }


    public function createKategori()
    {
        return view('components.admin.createKategori');
    }

    public function storeKategori(Request $request)
    {
        $kategori = new Category();


        $request->validate(
            [
                'gambar' => 'mimes:jpeg,png,jpg|max:2048',

            ],
            [
                'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
                'gambar.mimes' => 'Format File Harus jpeg,png,jpg',
            ]
        );
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('uploads/sampul_kategori');

            $pathFile = $kategori->gambar;

            if ($pathFile != null || $pathFile != '') {
                Storage::delete($pathFile);
            }
        } else {
            $path = $kategori->gambar;
        }

        $kategori->kategori = $request->kategori;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->gambar = $path;
        $kategori->save();
        Session::flash('tambahKategori', 'berhasil menambah kategori baru');

        return redirect('tampilKategori');
    }
    public function deleteKategori($id)
    {
        $data = Category::find($id);
        $pathfile = $data->gambar;
        Storage::delete($pathfile);
        $data->delete();
        Session::flash('hapusKategori', 'berhasil menghapus kategori');
        return redirect()->route('tampilKategori')->with('sucess', 'data berhasil dihapus');
    }

    public function profileAdmin()
    {
        $user = User::where('role', 1)->first();
        return view('components.admin.profileAdmin')->with(['user' => $user]);
    }

    public function editProfileAdmin(Request $request)
    {

        return view('components.admin.editProfileAdmin');
    }

    public function updateProfileAdmin(Request $request)
    {
        $id = $request->id;
        $user = User::findOrFail($id);
        $request->validate(
            [
                'gambar' => 'mimes:jpeg,png,jpg|max:2048',

            ],
            [
                'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
                'gambar.mimes' => 'Format File Harus jpeg,png,jpg',
            ]
        );
        if ($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('uploads/profile');

            $pathFile = $user->profile;

            if ($pathFile != null || $pathFile != '') {
                Storage::delete($pathFile);
            }
        } else {
            $path = $user->profile;
        }

        // $user = new buku();
        $user->username = $request->nama;
        $user->nimNip = $request->nim;
        $user->No_WhatsApp = $request->nomor;
        $user->profile = $path;

        $user->save();
        Session::flash('updateProfile', 'berhasil mengupdate profil anda');

        return  redirect('profileAdmin');
    }

    public function navbarAdmin()
    {
        $user = User::where('role', 1)->first();
        return view('components.admin.navbarAdmin')->with(['user' => $user]);
    }
}
