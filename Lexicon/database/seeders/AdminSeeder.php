<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'username'  => 'superadmin',
            'email'     => 'admin@example.com',
            'password'  => Hash::make('admin123'), // 🔐 always use Hash::make
            'fullName'  => 'Super Admin',
            'role'      => 'superadmin',
            'phone'     => '0771234567',
            'status'    => true,
        ]);
    }
}
