<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * Filter Autentikasi — Soal 02
 * Memblokir akses halaman yang membutuhkan login.
 * Jika belum login, redirect ke halaman login.
 */
class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Jika belum login, redirect ke halaman login
        if (! session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu untuk mengakses halaman ini.');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak perlu aksi setelah request
    }
}
