<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('items')->delete();
        
        \DB::table('items')->insert(array (
            0 => 
            array (
                'id_item' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'name' => 'Cottage',
                'type' => 'cottage',
                'description' => 'Tipe kamar 2 Guest dapat menampung maksimal 5 orang tamu dengan kata lain terdapat 1 tempat tidur. ',
                'active' => 'no',
            ),
            1 => 
            array (
                'id_item' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'name' => 'Cottage Lumbung',
                'type' => 'cottage',
                'description' => 'Tipe kamar 4 Guest dapat menampung maksimal 10 orang tamu dengan kata lain terdapat 2 tempat tidur dan 1 ruang keluarga',
                'active' => 'no',
            ),
            2 => 
            array (
                'id_item' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'name' => 'Cottage Hammock',
                'type' => 'cottage',
                'description' => 'Tipe kamar 4 Guest dapat menampung maksimal 10 orang tamu dengan kata lain terdapat 1 kamar dan anjungan dengan villa berada / mengapung di atas / tepi pantai',
                'active' => 'no',
            ),
            3 => 
            array (
                'id_item' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'name' => 'Villa Family',
                'type' => 'cottage',
                'description' => 'Tipe kamar 2 Guest dapat menampung maksimal 5 orang tamu dengan kata lain terdapat 1 tempat tidur.',
                'active' => 'no',
            ),
            4 => 
            array (
                'id_item' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
                'name' => 'Villa Apung',
                'type' => 'cottage',
                'description' => '-',
                'active' => 'yes',
            ),
        ));
        
        
    }
}