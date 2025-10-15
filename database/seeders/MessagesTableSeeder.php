<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('messages')->delete();
        
        \DB::table('messages')->insert(array (
            0 => 
            array (
                'id_message' => 1,
                'created_at' => '2023-07-04 21:13:41',
                'updated_at' => '2023-07-04 21:13:41',
                'name' => 'Megatron',
                'email' => 'megatron@transformer.com',
                'subject' => 'Pengajuan Kerja Sama dalam hal Digital Marketing',
                'message' => 'Halo,

Saya Mega berasal dari perusahaan Digital Marketing, mau menawarkan kerjasamanya terkait dengan Resort anda. Saya tertarik dan melihat kesempatan untuk memperbanyak traffic di web dan kunjungan pada resort anda. Jika berminat bisa menghubungi saya di 082298476941. Berharap dapat dikontak secepatnya.

With Love
Mega Chan',
            ),
            1 => 
            array (
                'id_message' => 2,
                'created_at' => '2023-07-04 21:16:38',
                'updated_at' => '2023-07-04 21:16:38',
                'name' => 'Tayo',
                'email' => 'tayo@littlebus.com',
                'subject' => 'Pengajuan Kerja Sama dalam hal Transportasi',
                'message' => 'Halo, 
Saya Tayo merupakan manager dari agensi moda transportasi bus yang tidak terlalu besar. Saya tertarik dengan resort anda dan sudah survey. Saya ingin mengajukan kerjasama terkait dengan transport dari Pusat Kota menuju resort anda. Transportasi Busnya mengenah sehingga bisa melalui medan temput ke resort anda. Jika berminta bisa kontak saya di 089677542744

Terima Kasih,
Salam hangat
Tayo',
            ),
        ));
        
        
    }
}