<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => Hash::make('admin')
        ]);
        User::factory()->create([
            'name' => 'Blue',
            'email' => 'fanafahriyanto11rpl2@gmail.com',
            'role' => 'admin',
            'password' => Hash::make('admin')
        ]);
    }
}
