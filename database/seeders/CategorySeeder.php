<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Adventure',
            'Crime',
            'Comedy',
            'Fantasy',
            'Horror',
        ];
        foreach ($categories as $c) {
            Category::create(['name' => $c]);
        }
    }
}
