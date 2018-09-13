<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'  => 'Xperia XZ',
            'price' => '900.00',
            'manufacturer_id' => 1,
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name'  => 'Galaxy Note 9',
            'price' => '1200.00',
            'manufacturer_id' => 2,
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name'  => 'Galaxy S9+',
            'price' => '900.00',
            'manufacturer_id' => 2,
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
        DB::table('products')->insert([
            'name'  => 'iPhone 8',
            'price' => '800.00',
            'manufacturer_id' => 3,
            'updated_at' => \DB::raw('CURRENT_TIMESTAMP')
        ]);
    }
}