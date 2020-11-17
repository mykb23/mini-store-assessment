<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Article::class, 30)->create();
        // factory(App\Products::class, 30)->create();
        Products::factory()->times(30)->create();
    }
}
