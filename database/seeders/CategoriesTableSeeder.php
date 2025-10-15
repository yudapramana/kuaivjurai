<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
                'name' => 'Travel News',
                'slug' => 'travel-news',
                'keywords' => 'travel, pariwisata, info-pariwisata, mandeh',
                'meta_desc' => 'travel, pariwisata, info-pariwisata, mandeh',
                'created_at' => '2023-07-10 12:14:14',
                'updated_at' => '2023-07-10 12:14:14',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Travel Tips',
                'slug' => 'travel-tips',
                'keywords' => 'travel, pariwisata, info-pariwisata, tips-traveling',
                'meta_desc' => 'travel, pariwisata, info-pariwisata, tips-traveling',
                'created_at' => '2023-07-10 12:14:34',
                'updated_at' => '2023-07-10 12:14:34',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Explore Pesisir Selatan',
                'slug' => 'explore-pesisir-selatan',
                'keywords' => 'explore pesisir, explore mandeh, pandanview',
                'meta_desc' => 'explore pesisir, explore mandeh, pandanview',
                'created_at' => '2023-07-10 12:15:30',
                'updated_at' => '2023-07-10 12:15:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Travel Info',
                'slug' => 'travel-info',
                'keywords' => 'Travel Info, Information, Pariwisata',
                'meta_desc' => 'Travel Info, Information, Pariwisata',
                'created_at' => '2023-07-11 11:34:28',
                'updated_at' => '2023-07-11 11:34:28',
            ),
        ));
        
        
    }
}