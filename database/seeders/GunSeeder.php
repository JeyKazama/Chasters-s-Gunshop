<?php

namespace Database\Seeders;

use App\Models\Gun;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class GunSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $brand = ['Glock', 'Colt', 'Beretta', 'Desert Eagle'];
        $caliber = ['9mm', '.357 Magnum', '.50 AE'];
        $magazine = ['17', '6', '15', '7'];

        for ($i = 0; $i < 10; $i++)
        {
            Gun::create([
                'name' => $faker->word(),
                'brand' => $faker->randomElement($brand),
                'caliber' => $faker->randomElement($caliber),
                'magazine' => $faker->randomElement($magazine),
                'price' => $faker->randomFloat(2, 100, 1000),
            ]);            
        }

    }
}
