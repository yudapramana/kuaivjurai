<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id_service' => 1,
                'created_at' => '2023-06-20 10:26:54',
                'updated_at' => '2023-06-20 16:43:32',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687262524/PandanViewMandeh/_PV1_y2h6yl.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687278150/PandanViewMandeh/_LAYOUT_u0nlql.jpg',
                'next_url' => 'aboutus',
                'title_id' => 'Selamat Datang di Pandan View',
                'title_en' => 'Welcome to Pandan View',
                'name' => 'Welcome to Pandan View',
                'slug' => NULL,
                'featured' => 'yes',
                'listed' => 'no',
                'description' => 'Selamat datang di Pandan View Mandeh, destinasi yang memukau dengan pemandangan yang indah. Disini Anda akan diberikan hadiah alam yang luar biasa dengan pemandangan yang menakjubkan. Saat mata Anda memandang, Anda akan disambut oleh panorama yang memukau dengan sentuhan keindahan yang tak tergambarkan.

Pandangan panorama di Pandan View Mandeh sungguh luar biasa. Terdapat perpaduan sempurna antara langit biru yang cerah dan laut biru yang memukau, yang seolah-olah bersatu tanpa batas. Airnya yang jernih dan tenang mencerminkan cahaya matahari, menciptakan panorama yang memesona dan memanjakan mata Anda.

Melihat ke arah pantai, Anda akan terpesona oleh garis pantai yang indah. Tak hanya itu, jika Anda melirik ke arah perbukitan yang mengelilingi Pandan View Mandeh, Anda akan menemukan keindahan yang memukau.',
            ),
            1 => 
            array (
                'id_service' => 2,
                'created_at' => '2023-06-20 11:50:14',
                'updated_at' => '2023-07-06 17:30:10',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687261764/PandanViewMandeh/t4knnfc6v9rqq9nryp1f_jo7squ.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687282977/PandanViewMandeh/_Pool_ftr4wi.jpg',
                'next_url' => '/service/facilities',
                'title_id' => 'Fasilitas Kami',
                'title_en' => 'Our Facilities',
                'name' => 'Fasilitas Kami',
                'slug' => 'facilities',
                'featured' => 'yes',
                'listed' => 'yes',
                'description' => 'Untuk memenuhi kebetuhan acara Anda, Pandan View Mandeh dilengkapi dengan fasilitas:  

1. Aula Kapasitas 100 orang (Bisa Disewa untuk event seperti Raker dan Consinyering)

2. Restoran kapasitas 200 orang

3. Mushola kapasitas 50 orang (sholat)

4. Lobby, dan Resepsionis

5. Kolam Renang 2 buah, kedalaman untuk anak-anak dan orang dewasa

6. Area parkir kapasitas 70 mobil Lokasi di dekat dermaga di pinggir pantai',
            ),
            2 => 
            array (
                'id_service' => 3,
                'created_at' => '2023-06-20 11:53:14',
                'updated_at' => '2023-07-06 17:34:45',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687261967/PandanViewMandeh/_ROOM_lm3lay.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687283044/PandanViewMandeh/jpg_20230528_120632_0000_u5ruus.jpg',
                'next_url' => '/service/accommodations',
                'title_id' => 'Akomodasi',
                'title_en' => 'Accommodations',
                'name' => 'Akomodasi',
                'slug' => 'accommodations',
                'featured' => 'yes',
                'listed' => 'yes',
                'description' => 'Pandan View Mandeh menyediakan beberapa tipe kamar yang bisa dihuni untuk beberapa banyak guest, diantaranya adalah 

1. Cottage Family : 8 Guest Capacity
2. Cottage Hammock : 5 Guest Capacity
3. Cottage Lumbung : 5 Guest Capacity
4. Villa Apung : 4 Guest Capacity
5. Villa Family Room : 4 Guest Capacity

Kamar dilengkapi dengan Kamar Mandi, Air Conditioner dan Balkon dengan View yang sangat indah dengan pemandangan laut lepas',
            ),
            3 => 
            array (
                'id_service' => 4,
                'created_at' => '2023-06-21 00:52:56',
                'updated_at' => '2023-06-22 10:10:39',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687283508/PandanViewMandeh/_RC4_rhddub.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687283570/PandanViewMandeh/20230517_121049_jrhxjp.jpg',
                'next_url' => '/service/food-beverage',
                'title_id' => 'Makanan dan Minuman',
                'title_en' => 'Food and Beverage',
                'name' => 'Food and Beverage',
                'slug' => 'food-beverage',
                'featured' => 'no',
                'listed' => 'yes',
            'description' => 'Di Pandan View Mandeh, makanan dan minuman (Food and Beverage) juga menjadi bagian penting dari pengalaman menginap dan menjelajahi keindahan alam pulau ini. Sumatera memiliki kekayaan budaya dan kuliner yang khas, yang tercermin dalam variasi hidangan yang ditawarkan di resort-resort di sana.',
            ),
            4 => 
            array (
                'id_service' => 5,
                'created_at' => '2023-06-21 00:59:18',
                'updated_at' => '2023-07-06 17:50:07',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687327051/PandanViewMandeh/amenities_wjonre.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687327058/PandanViewMandeh/ameni2_bwibzt.jpg',
                'next_url' => '/service/amenities',
                'title_id' => 'Perlengkapan',
                'title_en' => 'Amenities',
                'name' => 'Amenities',
                'slug' => 'amenities',
                'featured' => 'no',
                'listed' => 'no',
                'description' => 'Apabila Anda menginap di Pandan View Mandeh Resort, Anda akan mendapatkan beberapa fasilitas dan kenyamanan ketika menginap, diantaranya handuk, peralatan mandi, hingga perlengkapan untuk mengobrol bersama keluarga tercinta yakni kopi dan teh.',
            ),
            5 => 
            array (
                'id_service' => 6,
                'created_at' => '2023-07-12 09:52:59',
                'updated_at' => '2023-07-12 09:52:59',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1689130353/PandanViewMandeh/_AULA_qwcmmb.jpg',
                'content_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1689130370/PandanViewMandeh/_AULA2_n9mz8k.jpg',
                'next_url' => '/service/testimonies',
                'title_id' => 'Testimonies',
                'title_en' => 'Testimonies',
                'name' => 'Testimonies',
                'slug' => 'testimonies',
                'featured' => 'no',
                'listed' => 'yes',
                'description' => 'Testimonies',
            ),
        ));
        
        
    }
}