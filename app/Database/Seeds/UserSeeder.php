<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'password' => password_hash('admin123', PASSWORD_DEFAULT),
                'role'     => 'admin',
            ],
            [
                'username' => 'superadmin',
                'password' => password_hash('superadmin123', PASSWORD_DEFAULT),
                'role'     => 'super admin',
            ],
            [
                'username' => 'user',
                'password' => password_hash('user123', PASSWORD_DEFAULT),
                'role'     => 'user',
            ],
        ];

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
} 