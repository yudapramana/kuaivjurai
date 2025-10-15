<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TestimoniesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('testimonies')->delete();
        
        \DB::table('testimonies')->insert(array (
            0 => 
            array (
                'id_testimony' => 1,
                'name' => 'Shabrina Nadhira',
                'content' => 'Nice view, nice hospitality, good interior but very average food. Please improve your food taste! Nice job tho',
                'profile_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1689128682/PandanViewMandeh/AD_cMMQjMJYVvaTRXx2xzk3AL7NE1J0rK0e7LlEGfZwkWM1ar0w_w60-h60-p-rp-mo-ba2-br100_nfd1f8.png',
                'jabatan' => 'Masyarakat',
                'featured' => 'yes',
                'created_at' => '2023-07-12 09:18:38',
                'updated_at' => '2023-07-12 09:25:11',
            ),
            1 => 
            array (
                'id_testimony' => 2,
                'name' => 'Abu Ammar',
                'content' => 'Disini paket lengkap yang mana ada layanan cafe, cottage, paket penyeberangan ke pulau serta wisata bahari lainnya.

Tempat nya sangat bagus dan nyaman untuk pengunjung.
Tapi sangat disayangkan menu makanan dan minuman tidak terlalu banyak dan bervariasi, sehingga pengunjung tidak memiliki pilihan yang banyak. Kalau untuk harga sekelas cafe cukup standard bagi pengunjung.

Disediakan juga spot untuk berfoto bagi pengunjung.
Untuk fasilitas nya sudah lengkap, ada mushola, toilet dan bebas parkir juga.
Ketika cuaca cerah view laut dari sini masyaAllah indahnya.

Untuk pelayanan nya sangat ramah dan full senyum.
Semoga kedepan menu makanan dan minuman disini lebih bervariasi lagi !!!',
                'profile_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1689128766/PandanViewMandeh/AD_cMMQsswZoSqmHYPLWYoK8MUdBGsx42jJH-Zz7m3wUPA3ZEWY_w60-h60-p-rp-mo-ba5-br100_czd11b.png',
                'jabatan' => 'Google Local Guide',
                'featured' => 'yes',
                'created_at' => '2023-07-12 09:19:52',
                'updated_at' => '2023-07-12 09:26:32',
            ),
            2 => 
            array (
                'id_testimony' => 3,
                'name' => 'H Agung Nugroho',
                'content' => 'Lokasi bagus banget. View luar biasa, khususnya penggemar suasana pantai. Apalagi saat sunset. Perjalanan menantang karena jalan naik turun cukup curam. Hati-hati yang kurang menguasai kendaraan. Untuk yang hobi sepeda, sangat menantang. 21km dari kota Padang. Lokasi masih baru, jadi masih dalam pengembangan',
                'profile_url' => 'https://res.cloudinary.com/dezj1x6xp/image/upload/v1689128847/PandanViewMandeh/AD_cMMSRcLMK0zTa6v4NXWxbo3GD9jow1DYUqCekaoMpxs5wk6Q_w60-h60-p-rp-mo-ba4-br100_ywz8ad.png',
                'jabatan' => 'Google Local Guide',
                'featured' => 'no',
                'created_at' => '2023-07-12 09:27:36',
                'updated_at' => '2023-07-12 09:27:36',
            ),
        ));
        
        
    }
}