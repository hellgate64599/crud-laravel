<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Products::create([
                'ProductName' => $faker->word,
                'ProductDescription' => $faker->word,
                'ProductSlug' => $faker->word,
                'ProductImage' => 'https://picsum.photos/id/'.$i.'/300/300',
                'ProductPrice' => $faker->numberBetween($min = 10, $max = 1000),
                'ProductQuantity' => $faker->numberBetween($min = 1, $max = 100),
            ]);
        }

    }
}
