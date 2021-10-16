<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class apartmentsseeser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'id' => 1,
                'name' => 'A1',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 2,
                'name' => 'A2',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 3,
                'name' => 'A3',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 4,
                'name' => 'A4',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 5,
                'name' => 'A4',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 6,
                'name' => 'A5',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 7,
                'name' => 'A7',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 8,
                'name' => 'A8',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 9,
                'name' => 'A9',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 0,
                'name' => 'A10',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 11,
                'name' => 'B1',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 12,
                'name' => 'B2',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 13,
                'name' => 'B3',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 14,
                'name' => 'B4',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 15,
                'name' => 'B5',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 16,
                'name' => 'B6',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 17,
                'name' => 'B7',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 18,
                'name' => 'B8',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 19,
                'name' => 'B9',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],
            [
                'id' => 20,
                'name' => 'B10',
                'address' => 'HN',
                'price' => 1000,
                'thumbnail' => '',
                'general_information' => 'text',
                'detailed_information' => 'text',
            ],

        ]);

        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
