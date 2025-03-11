<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string
    {
        $data['page'] = 'beranda';
        return view('user/home', $data);
    }

    public function about(): string
    {
        $data['page'] = 'tentang';
        return view('/user/tentang', $data);
    }

    public function kegiatan(): string
    {
        $data['page'] = 'kegiatan';
        return view('/user/kegiatan', $data);
    }

    public function galeri(): string
    {
        $data['page'] = 'galeri';
        return view('/user/galeri', $data);
    }

    public function jadwal(): string
    {
        $data['page'] = 'jadwal';
        return view('/user/jadwal', $data);
    }

    public function kontak(): string
    {
        $data['page'] = 'kontak';
        return view('/user/kontak', $data);
    }
}
