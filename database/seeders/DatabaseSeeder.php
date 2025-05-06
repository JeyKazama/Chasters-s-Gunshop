<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GunSeeder::class
        ]);


        User::firstOrcreate([
            'email' => 'test@example.com',
        ], [
            'name'=> 'test User',
            'password' => bcrypt('password')
        ]);
    }
}
