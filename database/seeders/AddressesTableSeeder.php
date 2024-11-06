<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('addresses')->delete();
        
        \DB::table('addresses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'area' => 'Jl. Sudirman No. 123',
                'city' => 'Jakarta Selatan',
                'zip' => 12190,
            ),
            1 => 
            array (
                'id' => 2,
                'area' => 'Jl. Malioboro No. 45',
                'city' => 'Yogyakarta',
                'zip' => 55271,
            ),
            2 => 
            array (
                'id' => 3,
                'area' => 'Jl. Bukit Darmo Boulevard No. 67',
                'city' => 'Surabaya',
                'zip' => 60226,
            ),
            3 => 
            array (
                'id' => 4,
                'area' => 'Jl. Raya Kuta No. 88',
                'city' => 'Denpasar',
                'zip' => 80361,
            ),
        ));
    }
}