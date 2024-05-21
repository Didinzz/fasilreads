<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class registerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'nim' => 'required|string|max:255|unique:users,nimNip',
            'password' => 'required|string|min:6',
            'nomor' => 'required|string|unique:users,No_WhatsApp',
        ]);
        $newUser = new User;

        $newUser->nimNip = $request->nim;
        $newUser->username = $request->username;
        $newUser->No_WhatsApp = $request->nomor;
        $newUser->password = $request->password;

        $newUser->save();

        Session::flash('register', 'Anda Berhasil Melakukan Registrasi');


        return redirect('');
    }
}
