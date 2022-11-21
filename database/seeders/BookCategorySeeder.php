<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 5; $i++) {
            for ($j = 0; $j < 2; $j++)
                try {
                    BookCategory::create([
                        'book_id' => $i,
                        'category_id' => rand(1, 4)
                    ]);
                } catch (\Throwable $th) {
                }
        }
    }
}
