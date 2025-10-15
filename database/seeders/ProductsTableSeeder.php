<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id_product' => 1,
                'created_at' => '2023-06-21 11:29:50',
                'updated_at' => '2023-06-21 11:30:32',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687321817/PandanViewMandeh/_AULA4_vrajw6.jpg',
                'id_service' => 2,
                'title_id' => 'Aula',
                'title_en' => 'Hall',
                'name' => 'Aula',
                'description' => 'Aula Garuda dapat ditata dengan :
Seating Boardroom capasitas s/d   30 peserta
Seating U -Shape    capasitas s/d   50 peserta 
Seating Theatre capasitas s/d 200 peserta 
Standing party  atau &quot;Lesehan&quot; capasitas s/d 300 peserta',
                'next_url' => 'hall',
                'slug' => 'hall',
            ),
            1 => 
            array (
                'id_product' => 2,
                'created_at' => '2023-06-21 11:37:40',
                'updated_at' => '2023-06-21 11:37:40',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687322258/PandanViewMandeh/_MOSQUE_nceuyz.jpg',
                'id_service' => 2,
                'title_id' => 'Mushalla',
                'title_en' => 'Mosque',
                'name' => 'Mushalla',
                'description' => 'Untuk memenuhi kebutuhan Umat Muslim yang ingin melaksanakan ibadah Sholat berjamaah, dengan kapasitas 80 orang Jamaah.

Dapat juga digunakan sebagai Sholat Jumat, Majelis Taklim dan pertemuan Jamaah lainnya',
                'next_url' => 'mosque',
                'slug' => 'mosque',
            ),
            2 => 
            array (
                'id_product' => 3,
                'created_at' => '2023-06-21 11:38:41',
                'updated_at' => '2023-06-21 11:38:41',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687322318/PandanViewMandeh/_Pool_icsivj.jpg',
                'id_service' => 2,
                'title_id' => 'Kolam Berenang',
                'title_en' => 'Swimming Pool',
                'name' => 'Swimming Pool',
                'description' => 'Dengan View lembah dan pegunungan yang asri, Kolam renang Pandan View Mandeh tersedia dalam tiga kedalaman :

Kedalamam 140 cm untuk dewasa

Kedalaman 80 cm dan Kedalaman 50 cm untuk anak-anak',
                'next_url' => 'swimming-pool',
                'slug' => 'swimming-pool',
            ),
            3 => 
            array (
                'id_product' => 4,
                'created_at' => '2023-06-21 11:39:35',
                'updated_at' => '2023-06-21 11:39:35',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687322372/PandanViewMandeh/_RC1_t1ccvw.jpg',
                'id_service' => 2,
                'title_id' => 'Restoran',
                'title_en' => 'Restaurant',
                'name' => 'Restoran',
                'description' => 'Resto Cucak Rowo dapat menampung 200 Tamu

Breakfast buka dari Jam 7.00 sd 9.30

Lunch      buka dari Jam 12.00 sd 14.00

Dinner      buka dari Jam 18.30 sd 20.30',
                'next_url' => 'restaurant',
                'slug' => 'restaurant',
            ),
            4 => 
            array (
                'id_product' => 5,
                'created_at' => '2023-06-21 11:40:16',
                'updated_at' => '2023-06-26 11:32:16',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687753927/PandanViewMandeh/20230625_112806_0000_bll6u6.png',
                'id_service' => 2,
                'title_id' => 'Area Parkir',
                'title_en' => 'Parking Area',
                'name' => 'Area Parkir',
                'description' => 'Pandan View Mandeh memiliki dua area parkir berkapasitas sekitar 100 mobil dalam dua lokasi, Halaman Utama dan Area parkir barat',
                'next_url' => 'parking-area',
                'slug' => 'parking-area',
            ),
            5 => 
            array (
                'id_product' => 6,
                'created_at' => '2023-06-21 11:42:31',
                'updated_at' => '2023-06-21 11:42:31',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687322548/PandanViewMandeh/20230518_104044_ac4xro.jpg',
                'id_service' => 2,
                'title_id' => 'Dermaga',
                'title_en' => 'Dock Side',
                'name' => 'Dermaga',
                'description' => 'Dermaga Pandan View dibangun dengan konsep Pariwisata. Dermaga ini banyak dikunjungi wisatawan dikarenakan daya tarik dan fasilitas yang tersedia sangat baik.',
                'next_url' => 'dock-side',
                'slug' => 'dock-side',
            ),
            6 => 
            array (
                'id_product' => 7,
                'created_at' => '2023-06-21 17:30:41',
                'updated_at' => '2023-06-21 17:37:53',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687343181/PandanViewMandeh/Cottage_Lumbung_r0mc0y.png',
                'id_service' => 3,
                'title_id' => 'Cottage Lumbung',
                'title_en' => 'Cottage Lumbung',
                'name' => 'Cottage Lumbung',
                'description' => 'Tipe kamar 2 Guest dapat menampung maksimal 5 orang tamu dengan kata lain terdapat 1 tempat tidur. 

Fasilitas
1. Maksimal Kapasitas 5 orang
2. Free Sarapan 2 orang
3. Tersedia AC, Kamar Mandi, dan Balkon',
                'next_url' => NULL,
                'slug' => 'cottage-lumbung',
            ),
            7 => 
            array (
                'id_product' => 8,
                'created_at' => '2023-06-21 17:36:52',
                'updated_at' => '2023-06-21 17:37:44',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687343690/PandanViewMandeh/VIlla_Family_Room_hgws1i.png',
                'id_service' => 3,
                'title_id' => 'Villa Family Room',
                'title_en' => 'Villa Family Room',
                'name' => 'Villa Family Room',
                'description' => 'Tipe kamar 4 Guest dapat menampung maksimal 10 orang tamu dengan kata lain terdapat 2 tempat tidur dan 1 ruang keluarga

Fasilitas
1. Maksimal Kapasitas 10 orang
2. 2 Kamar Tidur AC, 1 ruang keluarga, 2 kamar mandi
3. Free Sarapan untuk 5 Orang',
                'next_url' => NULL,
                'slug' => 'villa-family-room',
            ),
            8 => 
            array (
                'id_product' => 9,
                'created_at' => '2023-06-22 10:08:22',
                'updated_at' => '2023-06-22 10:08:22',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687403295/PandanViewMandeh/jpg_20230525_105857_0000_pna52r.jpg',
                'id_service' => 3,
                'title_id' => 'Villa Apung',
                'title_en' => 'Villa Apung',
                'name' => 'Villa Apung',
                'description' => 'Tipe kamar 4 Guest dapat menampung maksimal 10 orang tamu dengan kata lain terdapat 1 kamar dan anjungan dengan villa berada / mengapung di atas / tepi pantai

Fasilitas
1. Maksimal Kapasitas 10 orang
2. Free Sarapan 4 orang
3. Tersedia AC, 2 Kamar Mandi, dan Anjungan,',
                'next_url' => NULL,
                'slug' => 'villa-apung',
            ),
            9 => 
            array (
                'id_product' => 10,
                'created_at' => '2023-06-23 07:48:08',
                'updated_at' => '2023-06-23 13:49:54',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687502927/PandanViewMandeh/hammock_gcfdqw.png',
                'id_service' => 3,
                'title_id' => 'Cottage Hammock',
                'title_en' => 'Cottage Hammock',
                'name' => 'Cottage Hammock',
                'description' => 'Tipe kamar 2 Guest dapat menampung maksimal 5 orang tamu dengan kata lain terdapat 1 tempat tidur.

Fasilitas
1. Maksimal Kapasitas 5 orang
2. Free Sarapan 2 orang
3. Tersedia AC, Kamar Mandi, dan Balkon
4. Balkon Hammock with View',
                'next_url' => NULL,
                'slug' => 'cottage-hammock',
            ),
            10 => 
            array (
                'id_product' => 12,
                'created_at' => '2023-06-26 11:29:21',
                'updated_at' => '2023-06-26 11:30:30',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1687753751/PandanViewMandeh/20230625_112806_0008_j7btjf.png',
                'id_service' => 2,
                'title_id' => 'Resepsionis',
                'title_en' => 'Receptionist',
                'name' => 'Resepsionis',
                'description' => 'Resepsionis adalah \'wajah\' dari sebuah penginapan atau resort dan berkontribusi pada pengalaman menginap para tamu',
                'next_url' => NULL,
                'slug' => 'receptionist',
            ),
            11 => 
            array (
                'id_product' => 13,
                'created_at' => '2023-07-06 17:39:19',
                'updated_at' => '2023-07-06 17:44:43',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688639853/PandanViewMandeh/AF1QipM_AHvCkeM-G6RrECroBLjSLycBjBxtZbvuGHXl_s0_qhrt5e.jpg',
                'id_service' => 4,
                'title_id' => 'Kopi',
                'title_en' => 'Coffee',
                'name' => 'Coffee',
                'description' => 'Kami dengan bangga mempersembahkan kepada Anda es kopi susu kami yang sempurna. Terinspirasi oleh kelezatan tradisional kopi susu, kami telah menggabungkan keunikan dan keceriaan dalam setiap tegukan yang Anda nikmati.

Di sini, kami mempersembahkan berbagai macam minuman yang segar, menggugah selera, dan menciptakan momen yang tak terlupakan. Dari kopi yang klasik hingga minuman inovatif yang unik, kami memiliki sesuatu untuk setiap selera.',
                'next_url' => NULL,
                'slug' => 'coffee',
            ),
            12 => 
            array (
                'id_product' => 14,
                'created_at' => '2023-07-06 17:42:50',
                'updated_at' => '2023-07-06 17:42:50',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688640105/PandanViewMandeh/AF1QipM2qw75XdpJvqDiBZzjwtMcSngfMtvmk4KkCXFE_s0_m7kp5z.jpg',
                'id_service' => 4,
                'title_id' => 'Hidangan Utama',
                'title_en' => 'Main Dish',
                'name' => 'Hidangan Utama',
                'description' => 'Kami dengan bangga menyajikan berbagai macam hidangan lezat yang akan memanjakan lidah Anda. Mulai dari makanan pembuka yang menggugah selera hingga hidangan utama yang memikat, kami menawarkan pengalaman kuliner yang tak terlupakan.

Bagi Anda yang menyukai cita rasa Asia, coba hidangan khas kami yang menggabungkan rempah-rempah dan bumbu tradisional. Nikmati hidangan nasi goreng yang lezat dengan campuran sayuran yang segar, atau mi goreng dengan udang yang berlimpah. Rasakan kelezatan hidangan kari kami yang kaya rasa, lengkap dengan nasi hangat dan roti naan lembut.',
                'next_url' => NULL,
                'slug' => 'main-dish',
            ),
            13 => 
            array (
                'id_product' => 15,
                'created_at' => '2023-07-06 17:49:32',
                'updated_at' => '2023-07-06 17:49:32',
                'cover_image_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1688640441/PandanViewMandeh/snack_blvtmt.jpg',
                'id_service' => 4,
                'title_id' => 'Cemilan',
                'title_en' => 'Snacks',
                'name' => 'Cemilan',
                'description' => 'Tempat di mana kelezatan bertemu kegembiraan. Kami dengan bangga menyajikan berbagai macam camilan yang menggugah selera dan menjadi teman setia saat Anda merayakan momen-momen kecil atau sekadar menikmati waktu santai.

Apakah Anda menyukai camilan gurih yang renyah? Kami memiliki pilihan keripik kentang yang dipanggang dengan sempurna, otak-otak yang diolah dengan bumbu yang lezat. Setiap gigitan memberikan sensasi yang memikat dan kepuasan yang tiada tara.',
                'next_url' => NULL,
                'slug' => NULL,
            ),
        ));
        
        
    }
}