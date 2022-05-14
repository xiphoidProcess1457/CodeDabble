<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class adminAccountSeeder extends Seeder
{
    public function run()
    {

        $data = [
            'username' => 'code',
            'name' => 'code',
            'email' => 'bryanstateresa30@gmail.com',
            'password' => password_hash('12341234', PASSWORD_DEFAULT),
            'role' => 'admin',
            'status' => 'activated'
        ];

        // Simple Queries
        //$this->db->query("INSERT INTO admin-users (username,name,email,password,role,status) VALUES(:username:,:name:,:email:,:password:,:role:,:status:)", $data);

        // Using Query Builder
        $this->db->table('admin-users')->insert($data);
    }
}