<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DasboarduserController extends Controller
{
    public function index()
    {
        // $user = User::all();
        $user = User::findOrFail(auth()->id());

        $categori = Category::all();
        // Contoh pengiriman data ke tampilan
        return view('dashboarduser')->with(['user'=>$user, 'categori'=>$categori]);
    }

    public function katalogBuku($kategori){
        $user = User::findOrFail(auth()->id());
        $kat = Category::where('kategori', $kategori)->first();

        $buku = buku::where('kategori', $kategori)->get();
        return view('components.user.katalogBuku')->with(['user' => $user, 'buku' => $buku, 'kat'=>$kat]);
    }

    public function profileUser(){
        return view('components.user.profileUser');
    }

    public function editProfileUser(){
        return view('components.user.editProfileUser');
    }

    public function updateProfileUser(Request $request)
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

        return  redirect('profileUser');
    }
}
