<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Webpack;

class WebIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Webpack::create([
            'name' => 'webicon',
            'url' => '/img/webicon.jpeg'
        ]);
    }
}
