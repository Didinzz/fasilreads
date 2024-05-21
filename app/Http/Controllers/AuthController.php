<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }


    public function proses_login(Request $request)
    {
        Session::flash('nip', $request->nip);
        $request->validate(
            [
                'nip' => 'required',
                'password' => 'required'
            ],
            [
                'nip.require' => 'nip tidak bisa kosong',
                'password.require' => 'password tidak bisa kosong',
            ]
        );
        
        $nip = $request->nip;
        $password = $request->password;


        if (Auth::attempt(['nimNip' => $nip, 'password' => $password])) {
            $user = Auth::user();

            if ($user->role == 1) {
                Session::flash('berhasil', 'Anda Berhasil Login Sebagai Admin');
                return redirect('dashboardadmin')->with('user', $user);
            } else {
                Session::flash('berhasil', 'Anda Berhasil Login');
                return redirect('dashboarduser')->with('user', $user);
            }

          
        } else {
            Session::flash('gagal', 'Nip atau Password tidak valid');
            Session::flash('error', 'danger');


            return redirect('
            ')->withErrors('Nip dan Password yang anda masukkan tidak valid');
        }
    }

    public function register(Request $request)
    {
        return view('register');
    }


    public function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
