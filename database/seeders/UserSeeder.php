<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;

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

        $staff = User::factory()->create([
            'name' => 'Blue',
            'email' => 'blue@blue.com',
            'password' => Hash::make('admin')
        ]);
        $staff->roles()->attach(Role::where('name', 'staff')->first());
        $staff->permissions()->attach(Permission::where('slug', 'inventory')->first());
    }
}
