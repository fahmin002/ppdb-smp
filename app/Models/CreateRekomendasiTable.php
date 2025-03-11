<?php 
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRekomendasiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'nama_rekomendator' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'penulis' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'tahun' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'kategori' => [
                'type' => 'VARCHAR',
                'constraint' => ['Fiksi', 'Non-Fiksi', 'Ilmiah', 'Sejarah', 'Teknologi'],
            ],
            'alasan_rekomendasi' => [
                'type' => 'TEXT',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '255',['active', 'inactive'],
                'default' => 'active',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('rekomendasi');
    }

    public function down()
    {
        $this->forge->dropTable('rekomendasi');
    }
}
?>