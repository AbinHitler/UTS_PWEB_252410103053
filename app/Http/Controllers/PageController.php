<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:50'],
        ], [
            'username.required' => 'Nama pengunjung wajib diisi.',
            'username.max'      => 'Nama pengunjung maksimal 50 karakter.',
        ]);

        $username = trim($request->input('username'));

        $request->session()->put('login_aktif', true);

        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function dashboard(Request $request)
    {
        if (!$request->session()->get('login_aktif')) {
            return redirect()->route('login');
        }

        $username = $request->query('username', 'Pengunjung');

        $produkPilihan = array_slice(Product::semua(), 0, 3);

        return view('dashboard', [
            'username'      => $username,
            'produkPilihan' => $produkPilihan,
        ]);
    }

    public function profile(Request $request)
    {
        if (!$request->session()->get('login_aktif')) {
            return redirect()->route('login');
        }

        $username = $request->query('username', 'Pengunjung');

        return view('profile', [
            'username' => $username,
        ]);
    }

    public function pengelolaan(Request $request)
    {
        if (!$request->session()->get('login_aktif')) {
            return redirect()->route('login');
        }

        $username = $request->query('username', 'Pengunjung');

        $produk = Product::semua();

        return view('pengelolaan', [
            'produk'   => $produk,
            'username' => $username,
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->forget('login_aktif');

        return redirect()->route('login');
    }
}
