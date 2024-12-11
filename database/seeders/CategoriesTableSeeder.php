<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Headset',
                'type' => 'Headset',
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mouse',
                'type' => 'Mouse',
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Monitor',
                'type' => 'Monitor',
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Gamepad',
                'type' => 'Gamepad',
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Flashdrive',
                'type' => 'Flashdrive',
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Speaker',
                'type' => 'Speaker',
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Powerbank',
                'type' => 'Powerbank',
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Keyboard',
                'type' => 'Keyboard',
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
        ));
        
    }
}