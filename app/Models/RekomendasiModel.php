<?php 

// app/Models/RekomendasiModel.php
// File: app/Models/RekomendasiModel.php
namespace App\Models;

use CodeIgniter\Model;

class RekomendasiModel extends Model
{
    protected $table = 'rekomendasi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama_rekomendator',
        'judul',
        'penulis',
        'penerbit',
        'tahun',
        'kategori',
        'alasan_rekomendasi',
        'status',
        'created_at',
        'updated_at'
    ];
    protected $useTimestamps = true;

    public function cekDuplikasi($judul, $penulis, $penerbit, $tahun)
    {
        return $this->where('judul', $judul)
                    ->where('penulis', $penulis)
                    ->where('penerbit', $penerbit)
                    ->where('tahun !=', $tahun)
                    ->first();
    }
}
