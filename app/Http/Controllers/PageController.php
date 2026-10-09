<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $data = [
            'title' => 'Halaman Utama',
            'welcome_message' => 'Selamat Datang di Web Setup Laravel 13!',
            'features' => [
                'Routing & Blade View',
                'Integrasi Model & Controller',
                'Data Dinamis dengan Array',
                'Styling dengan Tailwind CDN'
            ]
        ];

        return view('home', $data);
    }

    public function about()
    {
        $studentInfo = [
            'title' => 'Tentang Saya',
            'nama' => 'Nama Mahasiswa', // Ganti dengan nama kamu
            'nim' => '123456789',      // Ganti dengan NIM kamu
            'prodi' => 'Ilmu Komputer',
            'kampus' => 'FMIPA Universitas Negeri Medan',
            'skills' => ['PHP', 'Laravel', 'Tailwind CSS', 'MySQL', 'JavaScript']
        ];

        return view('about', compact('studentInfo'));
    }

    public function contact()
    {
        $contacts = [
            'title' => 'Hubungi Kami',
            'email' => 'mahasiswa@unimed.ac.id',
            'github' => 'https://github.com/username',
            'lokasi' => 'Medan, Sumatera Utara'
        ];

        return view('contact', compact('contacts'));
    }

    // Bonus: Route Parameter
    public function hello($nama)
    {
        return view('hello', [
            'title' => 'Sapaan Khusus',
            'nama' => ucfirst($nama)
        ]);
    }
}