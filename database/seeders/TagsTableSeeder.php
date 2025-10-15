<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Wisata',
                'slug' => 'wisata',
                'keywords' => 'pariwisata, pandan view mandeh, wisata mandeh',
                'meta_desc' => 'pariwisata, pandan view mandeh, wisata mandeh',
                'created_at' => '2023-07-10 12:16:25',
                'updated_at' => '2023-07-10 14:14:48',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Gugusan Mandeh',
                'slug' => 'gugusan-mandeh',
                'keywords' => 'pulau setan, mandeh, gugusan mandeh',
                'meta_desc' => 'pulau setan, mandeh, gugusan mandeh',
                'created_at' => '2023-07-10 12:17:09',
                'updated_at' => '2023-07-10 12:17:09',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Rapat Kerja',
                'slug' => 'rapat-kerja',
                'keywords' => 'Rapat Kerja, Raker, Radin',
                'meta_desc' => 'Rapat Kerja, Raker, Radin',
                'created_at' => '2023-07-10 15:23:33',
                'updated_at' => '2023-07-10 15:23:33',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Travel',
                'slug' => 'travel',
                'keywords' => 'travel',
                'meta_desc' => 'travel',
                'created_at' => '2023-07-11 11:34:42',
                'updated_at' => '2023-07-11 11:34:42',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Sales and Marketing',
                'slug' => 'sales-and-marketing',
                'keywords' => 'Sales and Marketing, Sales, Marketing',
                'meta_desc' => 'Sales and Marketing, Sales, Marketing',
                'created_at' => '2023-07-13 08:49:30',
                'updated_at' => '2023-07-13 08:49:30',
            ),
        ));
        
        
    }
}