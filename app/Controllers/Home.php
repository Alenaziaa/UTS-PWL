<?php

namespace App\Controllers;

use App\Controllers\BaseController;

/**
 * Home Controller — Soal 01
 * Mengelola semua halaman utama Web Profile TechClub.
 * Menggunakan layout.php sebagai dasar tampilan (Soal 03).
 */
class Home extends BaseController
{
    /**
     * Halaman Beranda — Public (Guest & Admin)
     */
    public function beranda()
    {
        return view('home/beranda', [
            'title'       => 'Beranda — TechClub',
            'activePage'  => 'beranda',
        ]);
    }

    /**
     * Halaman Tentang Kami — Public (Guest & Admin)
     */
    public function tentang()
    {
        return view('home/tentang', [
            'title'      => 'Tentang Kami — TechClub',
            'activePage' => 'tentang',
        ]);
    }

    /**
     * Halaman Galeri — Public (Guest & Admin)
     */
    public function galeri()
    {
        return view('home/galeri', [
            'title'      => 'Galeri — TechClub',
            'activePage' => 'galeri',
        ]);
    }

    /**
     * Halaman Dashboard — Admin Only (dilindungi AuthFilter — Soal 02)
     */
    public function dashboard()
    {
        return view('home/dashboard', [
            'title'      => 'Dashboard — TechClub',
            'activePage' => 'dashboard',
        ]);
    }

    /**
     * Halaman Kegiatan — Admin Only (dilindungi AuthFilter — Soal 02)
     */
    public function kegiatan()
    {
        return view('home/kegiatan', [
            'title'      => 'Kegiatan — TechClub',
            'activePage' => 'kegiatan',
        ]);
    }

    /**
     * Halaman Kontak — Admin Only (dilindungi AuthFilter — Soal 02)
     */
    public function kontak()
    {
        return view('home/kontak', [
            'title'      => 'Kontak — TechClub',
            'activePage' => 'kontak',
        ]);
    }
}
