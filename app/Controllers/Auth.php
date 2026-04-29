<?php

namespace App\Controllers;

use App\Controllers\BaseController;

/**
 * Auth Controller — Soal 04
 * Mengelola proses login dan logout menggunakan data statis (tidak dari database).
 * Mendefinisikan role admin untuk akses halaman tertentu.
 */
class Auth extends BaseController
{
    // -----------------------------------------------------------------------
    // Data user statis — Soal 04
    // Username dan password dibaca dari file PHP ini, bukan dari database.
    // -----------------------------------------------------------------------
    private array $users = [
        'admin' => [
            'password' => 'admin123',
            'role'     => 'admin',
            'name'     => 'Administrator TechClub',
        ],
    ];

    /**
     * Tampilkan halaman login (hanya untuk Guest — Soal 04).
     * Jika sudah login, redirect ke dashboard.
     */
    public function index()
    {
        // Soal 04: halaman login hanya untuk Guest
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/dashboard');
        }

        // Gunakan layout_clear (Soal 03)
        return view('auth/login', [
            'title' => 'Login — TechClub',
        ]);
    }

    /**
     * Proses form login dengan validasi data statis — Soal 04.
     */
    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi input tidak boleh kosong
        if (empty($username) || empty($password)) {
            return redirect()->to('/login')
                ->with('error', 'Username dan password tidak boleh kosong.');
        }

        // Cek apakah username ada dan password cocok
        if (isset($this->users[$username]) && $this->users[$username]['password'] === $password) {
            // Login berhasil — simpan sesi
            session()->set([
                'isLoggedIn' => true,
                'username'   => $username,
                'role'       => $this->users[$username]['role'],
                'name'       => $this->users[$username]['name'],
            ]);

            return redirect()->to('/dashboard')
                ->with('success', 'Selamat datang, ' . $this->users[$username]['name'] . '!');
        }

        // Login gagal
        return redirect()->to('/login')
            ->with('error', 'Username atau password salah. Silakan coba lagi.');
    }

    /**
     * Proses logout — hapus sesi dan redirect ke login.
     */
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')
            ->with('success', 'Anda telah berhasil logout.');
    }
}
