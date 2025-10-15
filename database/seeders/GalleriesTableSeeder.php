<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (
            0 => 
            array (
                'id_gallery' => 1,
                'created_at' => '2023-06-21 15:32:39',
                'updated_at' => '2023-06-21 15:40:16',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687336356/PandanViewMandeh/_AULA_jefxma.jpg',
                'filter_tag' => 'Facilities',
                'alt' => 'aula_v1',
                'title' => 'Aula View 1',
                'description' => 'Tampilan Layout Aula dari sebelah Barat dari Arah Pantai dan Pool',
            ),
            1 => 
            array (
                'id_gallery' => 2,
                'created_at' => '2023-06-21 15:42:43',
                'updated_at' => '2023-06-21 15:42:43',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687336947/PandanViewMandeh/_AULA2_fyorfm.jpg',
                'filter_tag' => 'Facilities',
                'alt' => 'aula_v2',
                'title' => 'Aula View 2',
                'description' => 'Tampilan Layout Aula dari sudut arah Bungalow dan Cottage',
            ),
            2 => 
            array (
                'id_gallery' => 3,
                'created_at' => '2023-06-21 15:43:29',
                'updated_at' => '2023-06-21 15:43:29',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687336997/PandanViewMandeh/_AULA4_krqgu7.jpg',
                'filter_tag' => 'Facilities',
                'alt' => 'aula_v3',
                'title' => 'Aula View 3',
                'description' => 'Tampilan Layout Aula dari sudut Dalam menuju view Laut dari Timur',
            ),
            3 => 
            array (
                'id_gallery' => 4,
                'created_at' => '2023-06-21 15:44:20',
                'updated_at' => '2023-06-23 13:52:46',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687337035/PandanViewMandeh/_RC1_dxb79n.jpg',
                'filter_tag' => 'Restaurant',
                'alt' => 'restoran_v1',
                'title' => 'Restoran 1',
                'description' => 'Tampilan Restoran dari dalam dari arah Kasir',
            ),
            4 => 
            array (
                'id_gallery' => 5,
                'created_at' => '2023-06-21 15:44:49',
                'updated_at' => '2023-06-23 13:52:54',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687337078/PandanViewMandeh/_RC2_jgoxtf.jpg',
                'filter_tag' => 'Restaurant',
                'alt' => 'restoran_v2',
                'title' => 'Restoran 2',
                'description' => 'Tampilan Ekor Restoran dari arah dapur menuju view mandeh',
            ),
            5 => 
            array (
                'id_gallery' => 6,
                'created_at' => '2023-06-21 15:45:21',
                'updated_at' => '2023-06-23 13:53:03',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687337105/PandanViewMandeh/_RC3_k33ton.jpg',
                'filter_tag' => 'Restaurant',
                'alt' => 'restoran_v3',
                'title' => 'Restoran 3',
                'description' => 'Tampilan Restoran menuju view mandeh dari POV Pelanggan',
            ),
            6 => 
            array (
                'id_gallery' => 7,
                'created_at' => '2023-06-21 15:45:54',
                'updated_at' => '2023-06-23 13:53:10',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687337142/PandanViewMandeh/_RC7_qrkcwd.jpg',
                'filter_tag' => 'Restaurant',
                'alt' => 'restoran_v4',
                'title' => 'Restoran 4',
                'description' => 'Tampilan Kasir dan Dapur pembuatan Minum Restoran',
            ),
            7 => 
            array (
                'id_gallery' => 8,
                'created_at' => '2023-06-21 15:50:06',
                'updated_at' => '2023-06-21 15:50:06',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687337167/PandanViewMandeh/20230520_144530_ymrqz5.jpg',
                'filter_tag' => 'Accommodation',
                'alt' => 'room_family',
                'title' => 'Room - Family',
                'description' => 'Family Room Villa',
            ),
            8 => 
            array (
                'id_gallery' => 9,
                'created_at' => '2023-06-21 15:51:50',
                'updated_at' => '2023-06-21 15:51:50',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687337482/PandanViewMandeh/jpg_20230525_105857_0000_aaniky.jpg',
                'filter_tag' => 'Accommodation',
                'alt' => 'room_villa_apung',
                'title' => 'Room - Villa Apung',
                'description' => 'Room Villa Apung',
            ),
            9 => 
            array (
                'id_gallery' => 10,
                'created_at' => '2023-06-21 15:53:21',
                'updated_at' => '2023-06-21 15:53:21',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687337596/PandanViewMandeh/Cottage_Lumbung_vncney.png',
                'filter_tag' => 'Accommodation',
                'alt' => 'room_cottage_lumbung',
                'title' => 'Room - Cottage Lumbung',
                'description' => 'Room Cottage Lumbung',
            ),
            10 => 
            array (
                'id_gallery' => 11,
                'created_at' => '2023-06-21 15:54:06',
                'updated_at' => '2023-06-21 15:54:06',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687337644/PandanViewMandeh/_Pool_kqthwg.jpg',
                'filter_tag' => 'Pool',
                'alt' => 'pool_v1',
                'title' => 'Pool View 1',
                'description' => 'Pool',
            ),
            11 => 
            array (
                'id_gallery' => 12,
                'created_at' => '2023-06-21 17:11:51',
                'updated_at' => '2023-06-21 17:11:51',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687342291/PandanViewMandeh/jpg_20230518_140721_0000_ygqo1e.jpg',
                'filter_tag' => 'Facilities',
                'alt' => 'dermaga_v1',
                'title' => 'Dermaga View 1',
                'description' => 'Dermaga tampak keluar dari bawah pandanview',
            ),
            12 => 
            array (
                'id_gallery' => 13,
                'created_at' => '2023-06-21 17:12:26',
                'updated_at' => '2023-06-21 17:12:26',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687342344/PandanViewMandeh/jpg_20230528_120235_0000_b1j3ja.jpg',
                'filter_tag' => 'Facilities',
                'alt' => 'dermaga_v2',
                'title' => 'Dermaga View 2',
                'description' => 'Dermaga tampak keluar dari bawah pandanview',
            ),
            13 => 
            array (
                'id_gallery' => 14,
                'created_at' => '2023-06-21 17:13:42',
                'updated_at' => '2023-06-21 17:13:42',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687342396/PandanViewMandeh/jpg_20230518_140827_0000_ui1tg3.jpg',
                'filter_tag' => 'Facilities',
                'alt' => 'dermaga_v3',
                'title' => 'Dermaga View 3',
                'description' => 'Dermaga tampak langsung menuju view laut dan kepualauan mandeh',
            ),
            14 => 
            array (
                'id_gallery' => 15,
                'created_at' => '2023-06-23 13:54:13',
                'updated_at' => '2023-06-23 13:54:13',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687503231/PandanViewMandeh/_VIEW1_tuhs1t.jpg',
                'filter_tag' => 'View',
                'alt' => 'view-1',
                'title' => 'View 1',
                'description' => 'View 1',
            ),
            15 => 
            array (
                'id_gallery' => 16,
                'created_at' => '2023-06-23 13:55:02',
                'updated_at' => '2023-06-23 13:55:02',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687503292/PandanViewMandeh/jpg_20230526_142231_0000_wiviin.jpg',
                'filter_tag' => 'View',
                'alt' => 'view-2',
                'title' => 'View 2',
                'description' => 'View 2',
            ),
            16 => 
            array (
                'id_gallery' => 17,
                'created_at' => '2023-06-23 14:15:57',
                'updated_at' => '2023-06-23 14:15:57',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687504540/PandanViewMandeh/Cottage_Family_uschgb.png',
                'filter_tag' => 'Accommodation',
                'alt' => 'Room - Cottage Family',
                'title' => 'Room - Cottage Family',
                'description' => 'Room - Cottage Family',
            ),
            17 => 
            array (
                'id_gallery' => 18,
                'created_at' => '2023-06-26 08:07:03',
                'updated_at' => '2023-06-26 08:07:03',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687741617/PandanViewMandeh/_ENTRANCE_xymy2b.jpg',
                'filter_tag' => 'Facilities',
                'alt' => 'Area Parkir 1',
                'title' => 'Area Parkir 1',
                'description' => 'Area Parkir 1',
            ),
            18 => 
            array (
                'id_gallery' => 19,
                'created_at' => '2023-06-26 08:08:06',
                'updated_at' => '2023-06-26 08:08:06',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687741679/PandanViewMandeh/20230625_112806_0000_rmv3yi.png',
                'filter_tag' => 'Facilities',
                'alt' => 'Area Parkir 2',
                'title' => 'Area Parkir 2',
                'description' => 'Area Parkir 2',
            ),
            19 => 
            array (
                'id_gallery' => 20,
                'created_at' => '2023-06-26 08:08:56',
                'updated_at' => '2023-06-26 08:08:56',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687741727/PandanViewMandeh/20230625_112806_0002_iv7sd6.png',
                'filter_tag' => 'Pool',
                'alt' => 'pool_v2',
                'title' => 'Pool View 2',
                'description' => 'Pool',
            ),
            20 => 
            array (
                'id_gallery' => 21,
                'created_at' => '2023-06-26 08:09:21',
                'updated_at' => '2023-06-26 08:09:21',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687741753/PandanViewMandeh/20230625_112806_0003_l7hhxf.png',
                'filter_tag' => 'Pool',
                'alt' => 'pool_v3',
                'title' => 'Pool View 3',
                'description' => 'Pool',
            ),
            21 => 
            array (
                'id_gallery' => 22,
                'created_at' => '2023-06-26 08:10:06',
                'updated_at' => '2023-06-26 08:10:06',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687741781/PandanViewMandeh/20230625_112806_0004_iyfmgp.png',
                'filter_tag' => 'Pool',
                'alt' => 'pool_v4',
                'title' => 'Pool View 4',
                'description' => 'Pool',
            ),
            22 => 
            array (
                'id_gallery' => 23,
                'created_at' => '2023-06-26 08:20:44',
                'updated_at' => '2023-06-26 08:20:58',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687742436/PandanViewMandeh/20230625_112806_0007_znw56g.png',
                'filter_tag' => 'Facilities',
                'alt' => 'resepsionis_v1',
                'title' => 'Resepsionis View 1',
                'description' => 'Resepsionis',
            ),
            23 => 
            array (
                'id_gallery' => 24,
                'created_at' => '2023-06-26 08:21:49',
                'updated_at' => '2023-06-26 08:21:49',
                'image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687742487/PandanViewMandeh/20230625_112806_0008_ycpnjm.png',
                'filter_tag' => 'Facilities',
                'alt' => 'resepsionis_v2',
                'title' => 'Resepsionis View 2',
                'description' => 'Resepsionis View 2',
            ),
        ));
        
        
    }
}