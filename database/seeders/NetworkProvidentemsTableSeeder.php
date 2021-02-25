<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NetworkProvidentemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('network_providentems')->delete();
        
        \DB::table('network_providentems')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'safaricom',
                '_code' => NULL,
                '_status' => 'pendeat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'airtel',
                '_code' => NULL,
                '_status' => 'pendeat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'equitel',
                '_code' => NULL,
                '_status' => 'pendeat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'eferio',
                '_code' => NULL,
                '_status' => 'pendeat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'mobile pay',
                '_code' => NULL,
                '_status' => 'pendeat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'sema mobile',
                '_code' => NULL,
                '_status' => 'pendeat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'telkom',
                '_code' => NULL,
                '_status' => 'pendeat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}