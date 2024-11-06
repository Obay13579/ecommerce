<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'full_name' => 'Budi Santoso',
                'email' => 'budi@gmail.com',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 1,
                'phone' => '62812582923',
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            1 =>
            array (
                'id' => 2,
                'full_name' => 'Siti Rahayu',
                'email' => 'siti@gmail.com',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 2,
                'phone' => '628124526165',
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            2 =>
            array (
                'id' => 3,
                'full_name' => 'Ahmad Wijaya',
                'email' => 'ahmad@gmail.com',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 3,
                'phone' => '628124252324',
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
            3 =>
            array (
                'id' => 4,
                'full_name' => 'Dewi Kusuma',
                'email' => 'dewi@gmail.com',
                'password' => '12345',
                'prev_password' => NULL,
                'address_id' => 4,
                'phone' => '628132423524',
                'created_at' => '2024-11-06',
                'updated_at' => '2024-11-06',
            ),
        ));
    }
}