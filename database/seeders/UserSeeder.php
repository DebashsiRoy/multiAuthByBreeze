<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
           'name' => 'Admin',
           'email' => 'admin@admin.com',
            'password'=>Hash::make('password'),
            'role' => 'admin'
        ]);
        $agent = User::create([
            'name' => 'Agent',
            'email' => 'agent@admin.com',
            'password'=>Hash::make('password'),
            'role' => 'agent'
        ]);
        $user = User::create([
            'name' => 'User',
            'email' => 'user@admin.com',
            'password'=>Hash::make('password'),
            'role' => 'user'
        ]);
    }
}
