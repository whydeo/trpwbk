<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Konstruktor, hanya mengizinkan pengguna yang belum login untuk mengakses halaman login.
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Menentukan kolom yang digunakan untuk login.
     *
     * @return string
     */
    public function username()
    {
        return 'username'; // Menentukan bahwa kolom 'username' yang digunakan untuk login
    }

    /**
     * Proses login pengguna.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Mencoba login dengan kredensial yang diberikan
        $credentials = ['username' => $request->username, 'password' => $request->password];

        // Jika "remember me" dipilih, periksa pilihan tersebut
        $remember = $request->has('remember') ? true : false;

        // Menggunakan Auth::attempt untuk mencoba login
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate(); // Regenerasi session untuk menghindari session fixation
            return redirect()->intended('dashboard'); // Arahkan ke halaman yang diinginkan setelah login
        }

        // Jika login gagal, kembalikan dengan error dan mempertahankan username yang dimasukkan
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->onlyInput('username');
    }

    /**
     * Proses logout pengguna.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout(); // Logout pengguna
        $request->session()->invalidate(); // Invalidate session
        $request->session()->regenerateToken(); // Regenerasi token CSRF untuk keamanan
        return redirect('/'); // Redirect ke halaman utama
    }
}
