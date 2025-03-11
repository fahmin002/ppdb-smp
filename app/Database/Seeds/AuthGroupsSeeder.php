<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroupsSeeder extends Seeder
{
    public function run()
    {
        // Memasukkan grup 'admin'
        $this->db->table('auth_groups')->insert([
            'name' => 'admin',
            'description' => 'Administrator group'
        ]);

        // Memasukkan grup 'user'
        $this->db->table('auth_groups')->insert([
            'name' => 'user',
            'description' => 'Standard user group'
        ]);
    }
}
