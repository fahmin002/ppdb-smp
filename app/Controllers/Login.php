<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function login()
    {
        $auth = service('authentication');
    
        // Proses login
        $login = $this->request->getPost('login');
        $password = $this->request->getPost('password');
        
        if (!$auth->attempt(['email' => $login, 'password' => $password], true)) {
            return redirect()->back()->with('error', 'Login gagal, periksa kembali kredensial Anda.');
        }
    
        // Ambil user yang login
        $user = $auth->user();
    
        // Redirect berdasarkan grup pengguna
        if ($user->inGroup('admin')) {
            return redirect()->to('/admin');
        } elseif ($user->inGroup('siswa')) {
            return redirect()->to('/siswa');
        }
    
        // Jika tidak ada grup, kembalikan ke halaman default
        return redirect()->to('/dashboard');
    }
    
}
