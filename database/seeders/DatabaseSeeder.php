<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $products = Product::factory();
        $products->create([
            'name'        => 'Unique Mercury',
            'description' => 'Example project on how to KSQL all the things',
            'types'       => [
                'Application',
                'Producer',
                'Consumer'
            ],
            'urls'        => [
                'github' => 'ralphschindler/unique-mercury'
            ]
        ]);
    }
}
