<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user'; // Sesuaikan dengan nama tabel di database
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = ['alamat', 'slug', 'tipe', 'kota'];

    // Metode pencarian
    public function search($keyword)
    {
        return $this->table('user')->like('alamat', $keyword)
                    ->orLike('tipe', $keyword)
                    ->orLike('kota', $keyword);
    }
}