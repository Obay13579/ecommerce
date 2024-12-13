<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'username' => 'admin',
                'name' => 'Gearable Admin',
                'password' => '12345',
                'created_at' => '2018-08-28',
                'updated_at' => '2018-08-28',
            ),
        ));
        
        
    }
}