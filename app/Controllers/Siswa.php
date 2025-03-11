<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Siswa extends BaseController
{
    public function index()
    {
        $data['page'] = 'beranda';

        return view('siswa/index', $data);
    }
}
