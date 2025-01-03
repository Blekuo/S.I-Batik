<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

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
            'password' => Hash::make('admin')
        ])->roles()->attach(Role::where('name', 'admin')->first());

        User::factory()->create([
            'name' => 'Blue',
            'email' => 'fanafahriyanto11rpl2@gmail.com',
            'password' => Hash::make('admin')
        ])->roles()->attach(Role::where('name', 'admin')->first());
    }
}
