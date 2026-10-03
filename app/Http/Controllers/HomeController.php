<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Testimonial;

/**
 * Dibuat dengan: php artisan make:controller HomeController
 */
class HomeController extends Controller
{
    /**
     * Halaman utama - menampilkan array data dinamis (profil singkat)
     */
    public function index(): View
    {
        $profile = [
            'nama'      => 'Muhammad Hafizh Maulana',
            'jurusan'   => 'Ilmu Komputer',
            'kampus'    => 'Universitas Negeri Medan (UNIMED)',
            'kelas'     => 'PSIK 25D',
            'skills'    => ['Java', 'HTML', 'CSS', 'PHP', 'C++', 'Laravel'],
        ];

        return view('home', compact('profile'));
    }

    /**
     * Halaman about - menampilkan data dinamis dari Eloquent (make:model -m)
     */
    public function about(): View
    {
        $testimonials = Testimonial::latest()->get();

        return view('about', compact('testimonials'));
    }

    /**
     * Halaman contact - menampilkan array data dinamis (info kontak)
     */
    public function contact(): View
    {
        $contacts = [
            ['label' => 'Email',    'value' => 'hafizh@example.com'],
            ['label' => 'Kampus',   'value' => 'UNIMED, Medan'],
            ['label' => 'Alamat',   'value' => 'Kab. Langkat, Sumatera Utara'],
        ];

        return view('contact', compact('contacts'));
    }
}
