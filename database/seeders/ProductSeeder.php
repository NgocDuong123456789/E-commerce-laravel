<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert(
            [
                'userName' => 'SAMSUMG2',
                'price' => '300',
                'category' => 'Laptop',
                'description' => 'a laptop with 4gb and much more features',
                'gallery' => 'https://cdn.tgdd.vn/Products/Images/42/285082/oppo-a57-128gb-vang-600x600.jpg',
            ],
            [
                'userName' => 'SAMSUMG3',
                'price' => '300',
                'category' => 'Laptop',
                'description' => 'a laptop with 4gb and much more features',
                'gallery' => 'https://cdn.tgdd.vn/Products/Images/42/285082/oppo-a57-128gb-vang-600x600.jpg',
            ],
            [
                'userName' => 'SAMSUMG4',
                'price' => '300',
                'category' => 'Laptop',
                'description' => 'a laptop with 4gb and much more features',
                'gallery' => 'https://cdn.tgdd.vn/Products/Images/42/285082/oppo-a57-128gb-vang-600x600.jpg',
            ],
            [
                'userName' => 'SAMSUMG5',
                'price' => '300',
                'category' => 'Laptop',
                'description' => 'a laptop with 4gb and much more features',
                'gallery' => 'https://cdn.tgdd.vn/Products/Images/42/285082/oppo-a57-128gb-vang-600x600.jpg',
            ],
        );
    }
}
