<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarouselsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('carousels')->delete();
        
        \DB::table('carousels')->insert(array (
            0 => 
            array (
                'id_carousel' => 1,
                'created_at' => '2023-07-04 19:34:25',
                'updated_at' => '2023-07-04 19:39:17',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688474062/PandanViewMandeh/pv-1_wbhyxz.jpg',
                'title' => 'Carousel 1',
                'active' => 'yes',
            ),
            1 => 
            array (
                'id_carousel' => 2,
                'created_at' => '2023-07-04 19:38:03',
                'updated_at' => '2023-07-04 19:42:08',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688474278/PandanViewMandeh/pv-3_g0abti.jpg',
                'title' => 'Carousel 2',
                'active' => 'yes',
            ),
            2 => 
            array (
                'id_carousel' => 3,
                'created_at' => '2023-07-04 19:41:24',
                'updated_at' => '2023-07-04 19:41:24',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688474480/PandanViewMandeh/pv-4_cunlyl.jpg',
                'title' => 'Carousel 3',
                'active' => 'yes',
            ),
            3 => 
            array (
                'id_carousel' => 4,
                'created_at' => '2023-07-04 19:41:42',
                'updated_at' => '2023-07-04 19:41:42',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688474500/PandanViewMandeh/pv-6_ki6mgf.jpg',
                'title' => 'Carousel 4',
                'active' => 'yes',
            ),
            4 => 
            array (
                'id_carousel' => 5,
                'created_at' => '2023-07-04 19:42:02',
                'updated_at' => '2023-07-04 19:42:02',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688474518/PandanViewMandeh/pv-6_sukntn.jpg',
                'title' => 'Carousel 5',
                'active' => 'yes',
            ),
            5 => 
            array (
                'id_carousel' => 6,
                'created_at' => '2023-07-04 19:42:26',
                'updated_at' => '2023-07-04 19:48:37',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688474542/PandanViewMandeh/pv-7_dyx7zt.jpg',
                'title' => 'Carousel 6',
                'active' => 'yes',
            ),
        ));
        
        
    }
}