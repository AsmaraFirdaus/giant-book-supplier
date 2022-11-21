<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        for ($i = 1; $i < 5; $i++) {
            Publisher::create([
                'name' => 'Publisher ' . $i,
                'address' => $faker->address(),
                'phone' => $faker->phoneNumber(),
                'email' => $faker->safeEmail(),
                'image' => 'image/publisher/dummy.png'
            ]);
        }
    }
}
