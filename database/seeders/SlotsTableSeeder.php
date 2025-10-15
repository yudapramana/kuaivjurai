<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SlotsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('slots')->delete();
        
        \DB::table('slots')->insert(array (
            0 => 
            array (
                'id_slot' => 1,
                'created_at' => '2023-07-17 15:42:51',
                'updated_at' => '2023-07-17 15:42:51',
                'deleted_at' => NULL,
                'id_reservation' => 1,
                'id_item' => 1,
                'total_room' => 1,
            ),
            1 => 
            array (
                'id_slot' => 2,
                'created_at' => '2023-07-17 15:42:51',
                'updated_at' => '2023-07-17 15:42:51',
                'deleted_at' => NULL,
                'id_reservation' => 1,
                'id_item' => 2,
                'total_room' => 0,
            ),
            2 => 
            array (
                'id_slot' => 3,
                'created_at' => '2023-07-17 15:42:51',
                'updated_at' => '2023-07-17 15:42:51',
                'deleted_at' => NULL,
                'id_reservation' => 1,
                'id_item' => 3,
                'total_room' => 0,
            ),
            3 => 
            array (
                'id_slot' => 4,
                'created_at' => '2023-07-17 15:42:51',
                'updated_at' => '2023-07-17 15:42:51',
                'deleted_at' => NULL,
                'id_reservation' => 1,
                'id_item' => 4,
                'total_room' => 0,
            ),
            4 => 
            array (
                'id_slot' => 5,
                'created_at' => '2023-07-17 15:43:34',
                'updated_at' => '2023-07-17 15:43:34',
                'deleted_at' => NULL,
                'id_reservation' => 2,
                'id_item' => 1,
                'total_room' => 0,
            ),
            5 => 
            array (
                'id_slot' => 6,
                'created_at' => '2023-07-17 15:43:34',
                'updated_at' => '2023-07-17 15:43:34',
                'deleted_at' => NULL,
                'id_reservation' => 2,
                'id_item' => 2,
                'total_room' => 1,
            ),
            6 => 
            array (
                'id_slot' => 7,
                'created_at' => '2023-07-17 15:43:34',
                'updated_at' => '2023-07-17 15:43:34',
                'deleted_at' => NULL,
                'id_reservation' => 2,
                'id_item' => 3,
                'total_room' => 0,
            ),
            7 => 
            array (
                'id_slot' => 8,
                'created_at' => '2023-07-17 15:43:34',
                'updated_at' => '2023-07-17 15:43:34',
                'deleted_at' => NULL,
                'id_reservation' => 2,
                'id_item' => 4,
                'total_room' => 0,
            ),
            8 => 
            array (
                'id_slot' => 9,
                'created_at' => '2023-07-17 15:44:13',
                'updated_at' => '2023-07-17 15:44:13',
                'deleted_at' => NULL,
                'id_reservation' => 3,
                'id_item' => 1,
                'total_room' => 0,
            ),
            9 => 
            array (
                'id_slot' => 10,
                'created_at' => '2023-07-17 15:44:13',
                'updated_at' => '2023-07-17 15:44:13',
                'deleted_at' => NULL,
                'id_reservation' => 3,
                'id_item' => 2,
                'total_room' => 1,
            ),
            10 => 
            array (
                'id_slot' => 11,
                'created_at' => '2023-07-17 15:44:13',
                'updated_at' => '2023-07-17 15:44:13',
                'deleted_at' => NULL,
                'id_reservation' => 3,
                'id_item' => 3,
                'total_room' => 0,
            ),
            11 => 
            array (
                'id_slot' => 12,
                'created_at' => '2023-07-17 15:44:13',
                'updated_at' => '2023-07-17 15:44:13',
                'deleted_at' => NULL,
                'id_reservation' => 3,
                'id_item' => 4,
                'total_room' => 0,
            ),
            12 => 
            array (
                'id_slot' => 13,
                'created_at' => '2023-07-17 15:44:51',
                'updated_at' => '2023-07-17 15:44:51',
                'deleted_at' => NULL,
                'id_reservation' => 4,
                'id_item' => 1,
                'total_room' => 3,
            ),
            13 => 
            array (
                'id_slot' => 14,
                'created_at' => '2023-07-17 15:44:51',
                'updated_at' => '2023-07-17 15:44:51',
                'deleted_at' => NULL,
                'id_reservation' => 4,
                'id_item' => 2,
                'total_room' => 0,
            ),
            14 => 
            array (
                'id_slot' => 15,
                'created_at' => '2023-07-17 15:44:51',
                'updated_at' => '2023-07-17 15:44:51',
                'deleted_at' => NULL,
                'id_reservation' => 4,
                'id_item' => 3,
                'total_room' => 0,
            ),
            15 => 
            array (
                'id_slot' => 16,
                'created_at' => '2023-07-17 15:44:51',
                'updated_at' => '2023-07-17 15:44:51',
                'deleted_at' => NULL,
                'id_reservation' => 4,
                'id_item' => 4,
                'total_room' => 0,
            ),
            16 => 
            array (
                'id_slot' => 17,
                'created_at' => '2023-07-17 15:47:29',
                'updated_at' => '2023-07-17 15:47:29',
                'deleted_at' => NULL,
                'id_reservation' => 5,
                'id_item' => 1,
                'total_room' => 4,
            ),
            17 => 
            array (
                'id_slot' => 18,
                'created_at' => '2023-07-17 15:47:29',
                'updated_at' => '2023-07-17 15:47:29',
                'deleted_at' => NULL,
                'id_reservation' => 5,
                'id_item' => 2,
                'total_room' => 1,
            ),
            18 => 
            array (
                'id_slot' => 19,
                'created_at' => '2023-07-17 15:47:29',
                'updated_at' => '2023-07-17 15:47:29',
                'deleted_at' => NULL,
                'id_reservation' => 5,
                'id_item' => 3,
                'total_room' => 0,
            ),
            19 => 
            array (
                'id_slot' => 20,
                'created_at' => '2023-07-17 15:47:29',
                'updated_at' => '2023-07-17 15:47:29',
                'deleted_at' => NULL,
                'id_reservation' => 5,
                'id_item' => 4,
                'total_room' => 0,
            ),
            20 => 
            array (
                'id_slot' => 21,
                'created_at' => '2023-07-17 20:56:16',
                'updated_at' => '2023-07-17 20:56:16',
                'deleted_at' => NULL,
                'id_reservation' => 6,
                'id_item' => 1,
                'total_room' => 0,
            ),
            21 => 
            array (
                'id_slot' => 22,
                'created_at' => '2023-07-17 20:56:16',
                'updated_at' => '2023-07-17 20:56:16',
                'deleted_at' => NULL,
                'id_reservation' => 6,
                'id_item' => 2,
                'total_room' => 0,
            ),
            22 => 
            array (
                'id_slot' => 23,
                'created_at' => '2023-07-17 20:56:16',
                'updated_at' => '2023-07-17 20:56:16',
                'deleted_at' => NULL,
                'id_reservation' => 6,
                'id_item' => 3,
                'total_room' => 1,
            ),
            23 => 
            array (
                'id_slot' => 24,
                'created_at' => '2023-07-17 20:56:16',
                'updated_at' => '2023-07-17 20:56:16',
                'deleted_at' => NULL,
                'id_reservation' => 6,
                'id_item' => 4,
                'total_room' => 0,
            ),
            24 => 
            array (
                'id_slot' => 25,
                'created_at' => '2023-07-17 20:57:08',
                'updated_at' => '2023-07-17 20:57:08',
                'deleted_at' => NULL,
                'id_reservation' => 7,
                'id_item' => 1,
                'total_room' => 0,
            ),
            25 => 
            array (
                'id_slot' => 26,
                'created_at' => '2023-07-17 20:57:08',
                'updated_at' => '2023-07-17 20:57:08',
                'deleted_at' => NULL,
                'id_reservation' => 7,
                'id_item' => 2,
                'total_room' => 0,
            ),
            26 => 
            array (
                'id_slot' => 27,
                'created_at' => '2023-07-17 20:57:08',
                'updated_at' => '2023-07-17 20:57:08',
                'deleted_at' => NULL,
                'id_reservation' => 7,
                'id_item' => 3,
                'total_room' => 1,
            ),
            27 => 
            array (
                'id_slot' => 28,
                'created_at' => '2023-07-17 20:57:08',
                'updated_at' => '2023-07-17 20:57:08',
                'deleted_at' => NULL,
                'id_reservation' => 7,
                'id_item' => 4,
                'total_room' => 0,
            ),
            28 => 
            array (
                'id_slot' => 29,
                'created_at' => '2023-07-17 20:58:40',
                'updated_at' => '2023-07-17 20:58:40',
                'deleted_at' => NULL,
                'id_reservation' => 8,
                'id_item' => 1,
                'total_room' => 7,
            ),
            29 => 
            array (
                'id_slot' => 30,
                'created_at' => '2023-07-17 20:58:40',
                'updated_at' => '2023-07-17 20:58:40',
                'deleted_at' => NULL,
                'id_reservation' => 8,
                'id_item' => 2,
                'total_room' => 3,
            ),
            30 => 
            array (
                'id_slot' => 31,
                'created_at' => '2023-07-17 20:58:40',
                'updated_at' => '2023-07-17 20:58:40',
                'deleted_at' => NULL,
                'id_reservation' => 8,
                'id_item' => 3,
                'total_room' => 1,
            ),
            31 => 
            array (
                'id_slot' => 32,
                'created_at' => '2023-07-17 20:58:40',
                'updated_at' => '2023-07-17 20:58:40',
                'deleted_at' => NULL,
                'id_reservation' => 8,
                'id_item' => 4,
                'total_room' => 0,
            ),
            32 => 
            array (
                'id_slot' => 33,
                'created_at' => '2023-07-17 20:59:37',
                'updated_at' => '2023-07-17 20:59:37',
                'deleted_at' => NULL,
                'id_reservation' => 9,
                'id_item' => 1,
                'total_room' => 1,
            ),
            33 => 
            array (
                'id_slot' => 34,
                'created_at' => '2023-07-17 20:59:37',
                'updated_at' => '2023-07-17 20:59:37',
                'deleted_at' => NULL,
                'id_reservation' => 9,
                'id_item' => 2,
                'total_room' => 0,
            ),
            34 => 
            array (
                'id_slot' => 35,
                'created_at' => '2023-07-17 20:59:37',
                'updated_at' => '2023-07-17 20:59:37',
                'deleted_at' => NULL,
                'id_reservation' => 9,
                'id_item' => 3,
                'total_room' => 1,
            ),
            35 => 
            array (
                'id_slot' => 36,
                'created_at' => '2023-07-17 20:59:37',
                'updated_at' => '2023-07-17 20:59:37',
                'deleted_at' => NULL,
                'id_reservation' => 9,
                'id_item' => 4,
                'total_room' => 0,
            ),
            36 => 
            array (
                'id_slot' => 37,
                'created_at' => '2023-07-17 21:00:35',
                'updated_at' => '2023-07-17 21:00:35',
                'deleted_at' => NULL,
                'id_reservation' => 10,
                'id_item' => 1,
                'total_room' => 4,
            ),
            37 => 
            array (
                'id_slot' => 38,
                'created_at' => '2023-07-17 21:00:35',
                'updated_at' => '2023-07-17 21:00:35',
                'deleted_at' => NULL,
                'id_reservation' => 10,
                'id_item' => 2,
                'total_room' => 0,
            ),
            38 => 
            array (
                'id_slot' => 39,
                'created_at' => '2023-07-17 21:00:35',
                'updated_at' => '2023-07-17 21:00:35',
                'deleted_at' => NULL,
                'id_reservation' => 10,
                'id_item' => 3,
                'total_room' => 0,
            ),
            39 => 
            array (
                'id_slot' => 40,
                'created_at' => '2023-07-17 21:00:35',
                'updated_at' => '2023-07-17 21:00:35',
                'deleted_at' => NULL,
                'id_reservation' => 10,
                'id_item' => 4,
                'total_room' => 0,
            ),
            40 => 
            array (
                'id_slot' => 41,
                'created_at' => '2023-07-17 21:01:06',
                'updated_at' => '2023-07-17 21:01:06',
                'deleted_at' => NULL,
                'id_reservation' => 11,
                'id_item' => 1,
                'total_room' => 3,
            ),
            41 => 
            array (
                'id_slot' => 42,
                'created_at' => '2023-07-17 21:01:06',
                'updated_at' => '2023-07-17 21:01:06',
                'deleted_at' => NULL,
                'id_reservation' => 11,
                'id_item' => 2,
                'total_room' => 0,
            ),
            42 => 
            array (
                'id_slot' => 43,
                'created_at' => '2023-07-17 21:01:06',
                'updated_at' => '2023-07-17 21:01:06',
                'deleted_at' => NULL,
                'id_reservation' => 11,
                'id_item' => 3,
                'total_room' => 0,
            ),
            43 => 
            array (
                'id_slot' => 44,
                'created_at' => '2023-07-17 21:01:06',
                'updated_at' => '2023-07-17 21:01:06',
                'deleted_at' => NULL,
                'id_reservation' => 11,
                'id_item' => 4,
                'total_room' => 0,
            ),
            44 => 
            array (
                'id_slot' => 45,
                'created_at' => '2023-07-17 21:01:46',
                'updated_at' => '2023-07-17 21:01:46',
                'deleted_at' => NULL,
                'id_reservation' => 12,
                'id_item' => 1,
                'total_room' => 0,
            ),
            45 => 
            array (
                'id_slot' => 46,
                'created_at' => '2023-07-17 21:01:46',
                'updated_at' => '2023-07-17 21:01:46',
                'deleted_at' => NULL,
                'id_reservation' => 12,
                'id_item' => 2,
                'total_room' => 1,
            ),
            46 => 
            array (
                'id_slot' => 47,
                'created_at' => '2023-07-17 21:01:46',
                'updated_at' => '2023-07-17 21:01:46',
                'deleted_at' => NULL,
                'id_reservation' => 12,
                'id_item' => 3,
                'total_room' => 0,
            ),
            47 => 
            array (
                'id_slot' => 48,
                'created_at' => '2023-07-17 21:01:46',
                'updated_at' => '2023-07-17 21:01:46',
                'deleted_at' => NULL,
                'id_reservation' => 12,
                'id_item' => 4,
                'total_room' => 0,
            ),
            48 => 
            array (
                'id_slot' => 49,
                'created_at' => '2023-07-17 23:01:07',
                'updated_at' => '2023-07-17 23:01:07',
                'deleted_at' => NULL,
                'id_reservation' => 13,
                'id_item' => 1,
                'total_room' => 4,
            ),
            49 => 
            array (
                'id_slot' => 50,
                'created_at' => '2023-07-17 23:01:07',
                'updated_at' => '2023-07-17 23:01:07',
                'deleted_at' => NULL,
                'id_reservation' => 13,
                'id_item' => 2,
                'total_room' => 0,
            ),
            50 => 
            array (
                'id_slot' => 51,
                'created_at' => '2023-07-17 23:01:07',
                'updated_at' => '2023-07-17 23:01:07',
                'deleted_at' => NULL,
                'id_reservation' => 13,
                'id_item' => 3,
                'total_room' => 0,
            ),
            51 => 
            array (
                'id_slot' => 52,
                'created_at' => '2023-07-17 23:01:07',
                'updated_at' => '2023-07-17 23:01:07',
                'deleted_at' => NULL,
                'id_reservation' => 13,
                'id_item' => 4,
                'total_room' => 0,
            ),
            52 => 
            array (
                'id_slot' => 53,
                'created_at' => '2023-07-17 23:01:51',
                'updated_at' => '2023-07-17 23:01:51',
                'deleted_at' => NULL,
                'id_reservation' => 14,
                'id_item' => 1,
                'total_room' => 0,
            ),
            53 => 
            array (
                'id_slot' => 54,
                'created_at' => '2023-07-17 23:01:51',
                'updated_at' => '2023-07-17 23:01:51',
                'deleted_at' => NULL,
                'id_reservation' => 14,
                'id_item' => 2,
                'total_room' => 0,
            ),
            54 => 
            array (
                'id_slot' => 55,
                'created_at' => '2023-07-17 23:01:51',
                'updated_at' => '2023-07-17 23:01:51',
                'deleted_at' => NULL,
                'id_reservation' => 14,
                'id_item' => 3,
                'total_room' => 0,
            ),
            55 => 
            array (
                'id_slot' => 56,
                'created_at' => '2023-07-17 23:01:51',
                'updated_at' => '2023-07-17 23:01:51',
                'deleted_at' => NULL,
                'id_reservation' => 14,
                'id_item' => 4,
                'total_room' => 0,
            ),
            56 => 
            array (
                'id_slot' => 57,
                'created_at' => '2023-07-17 23:02:22',
                'updated_at' => '2023-07-17 23:02:22',
                'deleted_at' => NULL,
                'id_reservation' => 15,
                'id_item' => 1,
                'total_room' => 0,
            ),
            57 => 
            array (
                'id_slot' => 58,
                'created_at' => '2023-07-17 23:02:22',
                'updated_at' => '2023-07-17 23:02:22',
                'deleted_at' => NULL,
                'id_reservation' => 15,
                'id_item' => 2,
                'total_room' => 1,
            ),
            58 => 
            array (
                'id_slot' => 59,
                'created_at' => '2023-07-17 23:02:22',
                'updated_at' => '2023-07-17 23:02:22',
                'deleted_at' => NULL,
                'id_reservation' => 15,
                'id_item' => 3,
                'total_room' => 0,
            ),
            59 => 
            array (
                'id_slot' => 60,
                'created_at' => '2023-07-17 23:02:22',
                'updated_at' => '2023-07-17 23:02:22',
                'deleted_at' => NULL,
                'id_reservation' => 15,
                'id_item' => 4,
                'total_room' => 0,
            ),
            60 => 
            array (
                'id_slot' => 61,
                'created_at' => '2023-07-17 23:03:05',
                'updated_at' => '2023-07-17 23:03:05',
                'deleted_at' => NULL,
                'id_reservation' => 16,
                'id_item' => 1,
                'total_room' => 5,
            ),
            61 => 
            array (
                'id_slot' => 62,
                'created_at' => '2023-07-17 23:03:05',
                'updated_at' => '2023-07-17 23:03:05',
                'deleted_at' => NULL,
                'id_reservation' => 16,
                'id_item' => 2,
                'total_room' => 0,
            ),
            62 => 
            array (
                'id_slot' => 63,
                'created_at' => '2023-07-17 23:03:05',
                'updated_at' => '2023-07-17 23:03:05',
                'deleted_at' => NULL,
                'id_reservation' => 16,
                'id_item' => 3,
                'total_room' => 0,
            ),
            63 => 
            array (
                'id_slot' => 64,
                'created_at' => '2023-07-17 23:03:05',
                'updated_at' => '2023-07-17 23:03:05',
                'deleted_at' => NULL,
                'id_reservation' => 16,
                'id_item' => 4,
                'total_room' => 0,
            ),
            64 => 
            array (
                'id_slot' => 65,
                'created_at' => '2023-07-17 23:03:45',
                'updated_at' => '2023-07-17 23:03:45',
                'deleted_at' => NULL,
                'id_reservation' => 17,
                'id_item' => 1,
                'total_room' => 1,
            ),
            65 => 
            array (
                'id_slot' => 66,
                'created_at' => '2023-07-17 23:03:45',
                'updated_at' => '2023-07-17 23:03:45',
                'deleted_at' => NULL,
                'id_reservation' => 17,
                'id_item' => 2,
                'total_room' => 0,
            ),
            66 => 
            array (
                'id_slot' => 67,
                'created_at' => '2023-07-17 23:03:45',
                'updated_at' => '2023-07-17 23:03:45',
                'deleted_at' => NULL,
                'id_reservation' => 17,
                'id_item' => 3,
                'total_room' => 0,
            ),
            67 => 
            array (
                'id_slot' => 68,
                'created_at' => '2023-07-17 23:03:45',
                'updated_at' => '2023-07-17 23:03:45',
                'deleted_at' => NULL,
                'id_reservation' => 17,
                'id_item' => 4,
                'total_room' => 0,
            ),
            68 => 
            array (
                'id_slot' => 69,
                'created_at' => '2023-07-17 23:04:03',
                'updated_at' => '2023-07-17 23:04:51',
                'deleted_at' => NULL,
                'id_reservation' => 18,
                'id_item' => 1,
                'total_room' => 0,
            ),
            69 => 
            array (
                'id_slot' => 70,
                'created_at' => '2023-07-17 23:04:03',
                'updated_at' => '2023-07-17 23:04:03',
                'deleted_at' => NULL,
                'id_reservation' => 18,
                'id_item' => 2,
                'total_room' => 0,
            ),
            70 => 
            array (
                'id_slot' => 71,
                'created_at' => '2023-07-17 23:04:03',
                'updated_at' => '2023-07-17 23:05:36',
                'deleted_at' => NULL,
                'id_reservation' => 18,
                'id_item' => 3,
                'total_room' => 0,
            ),
            71 => 
            array (
                'id_slot' => 72,
                'created_at' => '2023-07-17 23:04:03',
                'updated_at' => '2023-07-17 23:05:58',
                'deleted_at' => NULL,
                'id_reservation' => 18,
                'id_item' => 4,
                'total_room' => 0,
            ),
            72 => 
            array (
                'id_slot' => 73,
                'created_at' => '2023-07-17 23:07:40',
                'updated_at' => '2023-07-17 23:07:40',
                'deleted_at' => NULL,
                'id_reservation' => 19,
                'id_item' => 1,
                'total_room' => 0,
            ),
            73 => 
            array (
                'id_slot' => 74,
                'created_at' => '2023-07-17 23:07:40',
                'updated_at' => '2023-07-17 23:07:40',
                'deleted_at' => NULL,
                'id_reservation' => 19,
                'id_item' => 2,
                'total_room' => 0,
            ),
            74 => 
            array (
                'id_slot' => 75,
                'created_at' => '2023-07-17 23:07:40',
                'updated_at' => '2023-07-17 23:07:40',
                'deleted_at' => NULL,
                'id_reservation' => 19,
                'id_item' => 3,
                'total_room' => 0,
            ),
            75 => 
            array (
                'id_slot' => 76,
                'created_at' => '2023-07-17 23:07:40',
                'updated_at' => '2023-07-17 23:07:40',
                'deleted_at' => NULL,
                'id_reservation' => 19,
                'id_item' => 4,
                'total_room' => 1,
            ),
            76 => 
            array (
                'id_slot' => 77,
                'created_at' => '2023-07-17 23:11:11',
                'updated_at' => '2023-07-17 23:11:11',
                'deleted_at' => NULL,
                'id_reservation' => 20,
                'id_item' => 1,
                'total_room' => 3,
            ),
            77 => 
            array (
                'id_slot' => 78,
                'created_at' => '2023-07-17 23:11:11',
                'updated_at' => '2023-07-17 23:11:11',
                'deleted_at' => NULL,
                'id_reservation' => 20,
                'id_item' => 2,
                'total_room' => 0,
            ),
            78 => 
            array (
                'id_slot' => 79,
                'created_at' => '2023-07-17 23:11:11',
                'updated_at' => '2023-07-17 23:11:11',
                'deleted_at' => NULL,
                'id_reservation' => 20,
                'id_item' => 3,
                'total_room' => 0,
            ),
            79 => 
            array (
                'id_slot' => 80,
                'created_at' => '2023-07-17 23:11:11',
                'updated_at' => '2023-07-17 23:11:11',
                'deleted_at' => NULL,
                'id_reservation' => 20,
                'id_item' => 4,
                'total_room' => 1,
            ),
            80 => 
            array (
                'id_slot' => 81,
                'created_at' => '2023-07-17 23:11:35',
                'updated_at' => '2023-07-17 23:11:35',
                'deleted_at' => NULL,
                'id_reservation' => 21,
                'id_item' => 1,
                'total_room' => 1,
            ),
            81 => 
            array (
                'id_slot' => 82,
                'created_at' => '2023-07-17 23:11:35',
                'updated_at' => '2023-07-17 23:11:35',
                'deleted_at' => NULL,
                'id_reservation' => 21,
                'id_item' => 2,
                'total_room' => 0,
            ),
            82 => 
            array (
                'id_slot' => 83,
                'created_at' => '2023-07-17 23:11:35',
                'updated_at' => '2023-07-17 23:11:35',
                'deleted_at' => NULL,
                'id_reservation' => 21,
                'id_item' => 3,
                'total_room' => 0,
            ),
            83 => 
            array (
                'id_slot' => 84,
                'created_at' => '2023-07-17 23:11:35',
                'updated_at' => '2023-07-17 23:11:35',
                'deleted_at' => NULL,
                'id_reservation' => 21,
                'id_item' => 4,
                'total_room' => 0,
            ),
            84 => 
            array (
                'id_slot' => 85,
                'created_at' => '2023-07-17 23:12:16',
                'updated_at' => '2023-07-17 23:12:16',
                'deleted_at' => NULL,
                'id_reservation' => 22,
                'id_item' => 1,
                'total_room' => 4,
            ),
            85 => 
            array (
                'id_slot' => 86,
                'created_at' => '2023-07-17 23:12:16',
                'updated_at' => '2023-07-17 23:12:16',
                'deleted_at' => NULL,
                'id_reservation' => 22,
                'id_item' => 2,
                'total_room' => 0,
            ),
            86 => 
            array (
                'id_slot' => 87,
                'created_at' => '2023-07-17 23:12:16',
                'updated_at' => '2023-07-17 23:12:16',
                'deleted_at' => NULL,
                'id_reservation' => 22,
                'id_item' => 3,
                'total_room' => 0,
            ),
            87 => 
            array (
                'id_slot' => 88,
                'created_at' => '2023-07-17 23:12:16',
                'updated_at' => '2023-07-17 23:12:16',
                'deleted_at' => NULL,
                'id_reservation' => 22,
                'id_item' => 4,
                'total_room' => 0,
            ),
            88 => 
            array (
                'id_slot' => 89,
                'created_at' => '2023-07-17 23:53:31',
                'updated_at' => '2023-07-17 23:53:31',
                'deleted_at' => NULL,
                'id_reservation' => 23,
                'id_item' => 1,
                'total_room' => 1,
            ),
            89 => 
            array (
                'id_slot' => 90,
                'created_at' => '2023-07-17 23:53:31',
                'updated_at' => '2023-07-17 23:53:31',
                'deleted_at' => NULL,
                'id_reservation' => 23,
                'id_item' => 2,
                'total_room' => 0,
            ),
            90 => 
            array (
                'id_slot' => 91,
                'created_at' => '2023-07-17 23:53:31',
                'updated_at' => '2023-07-17 23:53:31',
                'deleted_at' => NULL,
                'id_reservation' => 23,
                'id_item' => 3,
                'total_room' => 0,
            ),
            91 => 
            array (
                'id_slot' => 92,
                'created_at' => '2023-07-17 23:53:31',
                'updated_at' => '2023-07-17 23:53:31',
                'deleted_at' => NULL,
                'id_reservation' => 23,
                'id_item' => 4,
                'total_room' => 0,
            ),
            92 => 
            array (
                'id_slot' => 93,
                'created_at' => '2023-07-18 02:31:23',
                'updated_at' => '2023-07-18 02:31:23',
                'deleted_at' => NULL,
                'id_reservation' => 24,
                'id_item' => 1,
                'total_room' => 8,
            ),
            93 => 
            array (
                'id_slot' => 94,
                'created_at' => '2023-07-18 02:31:23',
                'updated_at' => '2023-07-18 02:31:23',
                'deleted_at' => NULL,
                'id_reservation' => 24,
                'id_item' => 2,
                'total_room' => 0,
            ),
            94 => 
            array (
                'id_slot' => 95,
                'created_at' => '2023-07-18 02:31:23',
                'updated_at' => '2023-07-18 02:31:23',
                'deleted_at' => NULL,
                'id_reservation' => 24,
                'id_item' => 3,
                'total_room' => 0,
            ),
            95 => 
            array (
                'id_slot' => 96,
                'created_at' => '2023-07-18 02:31:23',
                'updated_at' => '2023-07-18 02:31:23',
                'deleted_at' => NULL,
                'id_reservation' => 24,
                'id_item' => 4,
                'total_room' => 0,
            ),
            96 => 
            array (
                'id_slot' => 97,
                'created_at' => '2023-07-18 02:31:47',
                'updated_at' => '2023-07-18 02:31:47',
                'deleted_at' => NULL,
                'id_reservation' => 25,
                'id_item' => 1,
                'total_room' => 1,
            ),
            97 => 
            array (
                'id_slot' => 98,
                'created_at' => '2023-07-18 02:31:47',
                'updated_at' => '2023-07-18 02:31:47',
                'deleted_at' => NULL,
                'id_reservation' => 25,
                'id_item' => 2,
                'total_room' => 0,
            ),
            98 => 
            array (
                'id_slot' => 99,
                'created_at' => '2023-07-18 02:31:47',
                'updated_at' => '2023-07-18 02:31:47',
                'deleted_at' => NULL,
                'id_reservation' => 25,
                'id_item' => 3,
                'total_room' => 0,
            ),
            99 => 
            array (
                'id_slot' => 100,
                'created_at' => '2023-07-18 02:31:47',
                'updated_at' => '2023-07-18 02:31:47',
                'deleted_at' => NULL,
                'id_reservation' => 25,
                'id_item' => 4,
                'total_room' => 0,
            ),
            100 => 
            array (
                'id_slot' => 101,
                'created_at' => '2023-07-18 02:32:23',
                'updated_at' => '2023-07-18 02:32:23',
                'deleted_at' => NULL,
                'id_reservation' => 26,
                'id_item' => 1,
                'total_room' => 7,
            ),
            101 => 
            array (
                'id_slot' => 102,
                'created_at' => '2023-07-18 02:32:23',
                'updated_at' => '2023-07-18 02:32:23',
                'deleted_at' => NULL,
                'id_reservation' => 26,
                'id_item' => 2,
                'total_room' => 0,
            ),
            102 => 
            array (
                'id_slot' => 103,
                'created_at' => '2023-07-18 02:32:23',
                'updated_at' => '2023-07-18 02:32:23',
                'deleted_at' => NULL,
                'id_reservation' => 26,
                'id_item' => 3,
                'total_room' => 0,
            ),
            103 => 
            array (
                'id_slot' => 104,
                'created_at' => '2023-07-18 02:32:23',
                'updated_at' => '2023-07-18 02:32:23',
                'deleted_at' => NULL,
                'id_reservation' => 26,
                'id_item' => 4,
                'total_room' => 1,
            ),
            104 => 
            array (
                'id_slot' => 105,
                'created_at' => '2023-07-18 02:33:08',
                'updated_at' => '2023-07-18 02:33:08',
                'deleted_at' => NULL,
                'id_reservation' => 27,
                'id_item' => 1,
                'total_room' => 0,
            ),
            105 => 
            array (
                'id_slot' => 106,
                'created_at' => '2023-07-18 02:33:08',
                'updated_at' => '2023-07-18 02:33:08',
                'deleted_at' => NULL,
                'id_reservation' => 27,
                'id_item' => 2,
                'total_room' => 1,
            ),
            106 => 
            array (
                'id_slot' => 107,
                'created_at' => '2023-07-18 02:33:08',
                'updated_at' => '2023-07-18 02:33:08',
                'deleted_at' => NULL,
                'id_reservation' => 27,
                'id_item' => 3,
                'total_room' => 0,
            ),
            107 => 
            array (
                'id_slot' => 108,
                'created_at' => '2023-07-18 02:33:08',
                'updated_at' => '2023-07-18 02:33:08',
                'deleted_at' => NULL,
                'id_reservation' => 27,
                'id_item' => 4,
                'total_room' => 0,
            ),
            108 => 
            array (
                'id_slot' => 109,
                'created_at' => '2023-07-18 02:33:57',
                'updated_at' => '2023-07-18 02:33:57',
                'deleted_at' => NULL,
                'id_reservation' => 28,
                'id_item' => 1,
                'total_room' => 7,
            ),
            109 => 
            array (
                'id_slot' => 110,
                'created_at' => '2023-07-18 02:33:57',
                'updated_at' => '2023-07-18 02:33:57',
                'deleted_at' => NULL,
                'id_reservation' => 28,
                'id_item' => 2,
                'total_room' => 3,
            ),
            110 => 
            array (
                'id_slot' => 111,
                'created_at' => '2023-07-18 02:33:57',
                'updated_at' => '2023-07-18 02:33:57',
                'deleted_at' => NULL,
                'id_reservation' => 28,
                'id_item' => 3,
                'total_room' => 2,
            ),
            111 => 
            array (
                'id_slot' => 112,
                'created_at' => '2023-07-18 02:33:57',
                'updated_at' => '2023-07-18 02:33:57',
                'deleted_at' => NULL,
                'id_reservation' => 28,
                'id_item' => 4,
                'total_room' => 0,
            ),
            112 => 
            array (
                'id_slot' => 113,
                'created_at' => '2023-07-18 02:35:09',
                'updated_at' => '2023-07-18 02:35:09',
                'deleted_at' => NULL,
                'id_reservation' => 29,
                'id_item' => 1,
                'total_room' => 6,
            ),
            113 => 
            array (
                'id_slot' => 114,
                'created_at' => '2023-07-18 02:35:09',
                'updated_at' => '2023-07-18 02:35:09',
                'deleted_at' => NULL,
                'id_reservation' => 29,
                'id_item' => 2,
                'total_room' => 3,
            ),
            114 => 
            array (
                'id_slot' => 115,
                'created_at' => '2023-07-18 02:35:09',
                'updated_at' => '2023-07-18 02:35:09',
                'deleted_at' => NULL,
                'id_reservation' => 29,
                'id_item' => 3,
                'total_room' => 0,
            ),
            115 => 
            array (
                'id_slot' => 116,
                'created_at' => '2023-07-18 02:35:09',
                'updated_at' => '2023-07-18 02:35:09',
                'deleted_at' => NULL,
                'id_reservation' => 29,
                'id_item' => 4,
                'total_room' => 0,
            ),
            116 => 
            array (
                'id_slot' => 117,
                'created_at' => '2023-07-20 10:37:48',
                'updated_at' => '2023-07-20 10:37:48',
                'deleted_at' => NULL,
                'id_reservation' => 30,
                'id_item' => 1,
                'total_room' => 1,
            ),
            117 => 
            array (
                'id_slot' => 118,
                'created_at' => '2023-07-20 10:37:48',
                'updated_at' => '2023-07-20 10:37:48',
                'deleted_at' => NULL,
                'id_reservation' => 30,
                'id_item' => 2,
                'total_room' => 0,
            ),
            118 => 
            array (
                'id_slot' => 119,
                'created_at' => '2023-07-20 10:37:48',
                'updated_at' => '2023-07-20 10:37:48',
                'deleted_at' => NULL,
                'id_reservation' => 30,
                'id_item' => 3,
                'total_room' => 0,
            ),
            119 => 
            array (
                'id_slot' => 120,
                'created_at' => '2023-07-20 10:37:48',
                'updated_at' => '2023-07-20 10:37:48',
                'deleted_at' => NULL,
                'id_reservation' => 30,
                'id_item' => 4,
                'total_room' => 0,
            ),
            120 => 
            array (
                'id_slot' => 121,
                'created_at' => '2023-07-20 10:38:57',
                'updated_at' => '2023-07-20 10:38:57',
                'deleted_at' => NULL,
                'id_reservation' => 31,
                'id_item' => 1,
                'total_room' => 1,
            ),
            121 => 
            array (
                'id_slot' => 122,
                'created_at' => '2023-07-20 10:38:57',
                'updated_at' => '2023-07-20 10:38:57',
                'deleted_at' => NULL,
                'id_reservation' => 31,
                'id_item' => 2,
                'total_room' => 0,
            ),
            122 => 
            array (
                'id_slot' => 123,
                'created_at' => '2023-07-20 10:38:57',
                'updated_at' => '2023-07-20 10:38:57',
                'deleted_at' => NULL,
                'id_reservation' => 31,
                'id_item' => 3,
                'total_room' => 0,
            ),
            123 => 
            array (
                'id_slot' => 124,
                'created_at' => '2023-07-20 10:38:57',
                'updated_at' => '2023-07-20 10:38:57',
                'deleted_at' => NULL,
                'id_reservation' => 31,
                'id_item' => 4,
                'total_room' => 0,
            ),
            124 => 
            array (
                'id_slot' => 125,
                'created_at' => '2023-07-20 10:39:49',
                'updated_at' => '2023-07-20 10:39:49',
                'deleted_at' => NULL,
                'id_reservation' => 32,
                'id_item' => 1,
                'total_room' => 2,
            ),
            125 => 
            array (
                'id_slot' => 126,
                'created_at' => '2023-07-20 10:39:49',
                'updated_at' => '2023-07-20 10:39:49',
                'deleted_at' => NULL,
                'id_reservation' => 32,
                'id_item' => 2,
                'total_room' => 0,
            ),
            126 => 
            array (
                'id_slot' => 127,
                'created_at' => '2023-07-20 10:39:49',
                'updated_at' => '2023-07-20 10:39:49',
                'deleted_at' => NULL,
                'id_reservation' => 32,
                'id_item' => 3,
                'total_room' => 0,
            ),
            127 => 
            array (
                'id_slot' => 128,
                'created_at' => '2023-07-20 10:39:49',
                'updated_at' => '2023-07-20 10:39:49',
                'deleted_at' => NULL,
                'id_reservation' => 32,
                'id_item' => 4,
                'total_room' => 0,
            ),
            128 => 
            array (
                'id_slot' => 129,
                'created_at' => '2023-07-20 10:49:59',
                'updated_at' => '2023-07-20 10:49:59',
                'deleted_at' => NULL,
                'id_reservation' => 33,
                'id_item' => 1,
                'total_room' => 1,
            ),
            129 => 
            array (
                'id_slot' => 130,
                'created_at' => '2023-07-20 10:49:59',
                'updated_at' => '2023-07-20 10:49:59',
                'deleted_at' => NULL,
                'id_reservation' => 33,
                'id_item' => 2,
                'total_room' => 0,
            ),
            130 => 
            array (
                'id_slot' => 131,
                'created_at' => '2023-07-20 10:49:59',
                'updated_at' => '2023-07-20 10:49:59',
                'deleted_at' => NULL,
                'id_reservation' => 33,
                'id_item' => 3,
                'total_room' => 0,
            ),
            131 => 
            array (
                'id_slot' => 132,
                'created_at' => '2023-07-20 10:49:59',
                'updated_at' => '2023-07-20 10:49:59',
                'deleted_at' => NULL,
                'id_reservation' => 33,
                'id_item' => 4,
                'total_room' => 0,
            ),
            132 => 
            array (
                'id_slot' => 133,
                'created_at' => '2023-07-20 10:51:54',
                'updated_at' => '2023-07-20 10:51:54',
                'deleted_at' => NULL,
                'id_reservation' => 34,
                'id_item' => 1,
                'total_room' => 1,
            ),
            133 => 
            array (
                'id_slot' => 134,
                'created_at' => '2023-07-20 10:51:54',
                'updated_at' => '2023-07-20 10:51:54',
                'deleted_at' => NULL,
                'id_reservation' => 34,
                'id_item' => 2,
                'total_room' => 0,
            ),
            134 => 
            array (
                'id_slot' => 135,
                'created_at' => '2023-07-20 10:51:54',
                'updated_at' => '2023-07-20 10:51:54',
                'deleted_at' => NULL,
                'id_reservation' => 34,
                'id_item' => 3,
                'total_room' => 0,
            ),
            135 => 
            array (
                'id_slot' => 136,
                'created_at' => '2023-07-20 10:51:54',
                'updated_at' => '2023-07-20 10:51:54',
                'deleted_at' => NULL,
                'id_reservation' => 34,
                'id_item' => 4,
                'total_room' => 0,
            ),
            136 => 
            array (
                'id_slot' => 137,
                'created_at' => '2023-07-20 10:52:09',
                'updated_at' => '2023-07-20 10:52:09',
                'deleted_at' => NULL,
                'id_reservation' => 35,
                'id_item' => 1,
                'total_room' => 0,
            ),
            137 => 
            array (
                'id_slot' => 138,
                'created_at' => '2023-07-20 10:52:09',
                'updated_at' => '2023-07-20 10:52:09',
                'deleted_at' => NULL,
                'id_reservation' => 35,
                'id_item' => 2,
                'total_room' => 2,
            ),
            138 => 
            array (
                'id_slot' => 139,
                'created_at' => '2023-07-20 10:52:09',
                'updated_at' => '2023-07-20 10:52:09',
                'deleted_at' => NULL,
                'id_reservation' => 35,
                'id_item' => 3,
                'total_room' => 0,
            ),
            139 => 
            array (
                'id_slot' => 140,
                'created_at' => '2023-07-20 10:52:09',
                'updated_at' => '2023-07-20 10:52:09',
                'deleted_at' => NULL,
                'id_reservation' => 35,
                'id_item' => 4,
                'total_room' => 0,
            ),
            140 => 
            array (
                'id_slot' => 141,
                'created_at' => '2023-07-20 10:52:24',
                'updated_at' => '2023-07-20 10:52:24',
                'deleted_at' => NULL,
                'id_reservation' => 36,
                'id_item' => 1,
                'total_room' => 0,
            ),
            141 => 
            array (
                'id_slot' => 142,
                'created_at' => '2023-07-20 10:52:24',
                'updated_at' => '2023-07-20 10:52:24',
                'deleted_at' => NULL,
                'id_reservation' => 36,
                'id_item' => 2,
                'total_room' => 0,
            ),
            142 => 
            array (
                'id_slot' => 143,
                'created_at' => '2023-07-20 10:52:24',
                'updated_at' => '2023-07-20 10:52:24',
                'deleted_at' => NULL,
                'id_reservation' => 36,
                'id_item' => 3,
                'total_room' => 1,
            ),
            143 => 
            array (
                'id_slot' => 144,
                'created_at' => '2023-07-20 10:52:24',
                'updated_at' => '2023-07-20 10:52:24',
                'deleted_at' => NULL,
                'id_reservation' => 36,
                'id_item' => 4,
                'total_room' => 0,
            ),
            144 => 
            array (
                'id_slot' => 145,
                'created_at' => '2023-07-20 10:52:35',
                'updated_at' => '2023-07-20 10:52:35',
                'deleted_at' => NULL,
                'id_reservation' => 37,
                'id_item' => 1,
                'total_room' => 0,
            ),
            145 => 
            array (
                'id_slot' => 146,
                'created_at' => '2023-07-20 10:52:35',
                'updated_at' => '2023-07-20 10:52:35',
                'deleted_at' => NULL,
                'id_reservation' => 37,
                'id_item' => 2,
                'total_room' => 1,
            ),
            146 => 
            array (
                'id_slot' => 147,
                'created_at' => '2023-07-20 10:52:35',
                'updated_at' => '2023-07-20 10:52:35',
                'deleted_at' => NULL,
                'id_reservation' => 37,
                'id_item' => 3,
                'total_room' => 0,
            ),
            147 => 
            array (
                'id_slot' => 148,
                'created_at' => '2023-07-20 10:52:35',
                'updated_at' => '2023-07-20 10:52:35',
                'deleted_at' => NULL,
                'id_reservation' => 37,
                'id_item' => 4,
                'total_room' => 0,
            ),
            148 => 
            array (
                'id_slot' => 149,
                'created_at' => '2023-07-20 10:52:46',
                'updated_at' => '2023-07-20 10:52:46',
                'deleted_at' => NULL,
                'id_reservation' => 38,
                'id_item' => 1,
                'total_room' => 0,
            ),
            149 => 
            array (
                'id_slot' => 150,
                'created_at' => '2023-07-20 10:52:46',
                'updated_at' => '2023-07-20 10:52:46',
                'deleted_at' => NULL,
                'id_reservation' => 38,
                'id_item' => 2,
                'total_room' => 0,
            ),
            150 => 
            array (
                'id_slot' => 151,
                'created_at' => '2023-07-20 10:52:46',
                'updated_at' => '2023-07-20 10:52:46',
                'deleted_at' => NULL,
                'id_reservation' => 38,
                'id_item' => 3,
                'total_room' => 0,
            ),
            151 => 
            array (
                'id_slot' => 152,
                'created_at' => '2023-07-20 10:52:46',
                'updated_at' => '2023-07-20 10:52:46',
                'deleted_at' => NULL,
                'id_reservation' => 38,
                'id_item' => 4,
                'total_room' => 1,
            ),
            152 => 
            array (
                'id_slot' => 153,
                'created_at' => '2023-07-20 10:52:55',
                'updated_at' => '2023-07-20 10:52:55',
                'deleted_at' => NULL,
                'id_reservation' => 39,
                'id_item' => 1,
                'total_room' => 2,
            ),
            153 => 
            array (
                'id_slot' => 154,
                'created_at' => '2023-07-20 10:52:55',
                'updated_at' => '2023-07-20 10:52:55',
                'deleted_at' => NULL,
                'id_reservation' => 39,
                'id_item' => 2,
                'total_room' => 0,
            ),
            154 => 
            array (
                'id_slot' => 155,
                'created_at' => '2023-07-20 10:52:55',
                'updated_at' => '2023-07-20 10:52:55',
                'deleted_at' => NULL,
                'id_reservation' => 39,
                'id_item' => 3,
                'total_room' => 0,
            ),
            155 => 
            array (
                'id_slot' => 156,
                'created_at' => '2023-07-20 10:52:55',
                'updated_at' => '2023-07-20 10:52:55',
                'deleted_at' => NULL,
                'id_reservation' => 39,
                'id_item' => 4,
                'total_room' => 0,
            ),
            156 => 
            array (
                'id_slot' => 157,
                'created_at' => '2023-07-20 10:53:02',
                'updated_at' => '2023-07-20 10:53:02',
                'deleted_at' => NULL,
                'id_reservation' => 40,
                'id_item' => 1,
                'total_room' => 0,
            ),
            157 => 
            array (
                'id_slot' => 158,
                'created_at' => '2023-07-20 10:53:02',
                'updated_at' => '2023-07-20 10:53:02',
                'deleted_at' => NULL,
                'id_reservation' => 40,
                'id_item' => 2,
                'total_room' => 0,
            ),
            158 => 
            array (
                'id_slot' => 159,
                'created_at' => '2023-07-20 10:53:02',
                'updated_at' => '2023-07-20 10:53:02',
                'deleted_at' => NULL,
                'id_reservation' => 40,
                'id_item' => 3,
                'total_room' => 1,
            ),
            159 => 
            array (
                'id_slot' => 160,
                'created_at' => '2023-07-20 10:53:02',
                'updated_at' => '2023-07-20 10:53:02',
                'deleted_at' => NULL,
                'id_reservation' => 40,
                'id_item' => 4,
                'total_room' => 0,
            ),
            160 => 
            array (
                'id_slot' => 161,
                'created_at' => '2023-07-20 10:53:22',
                'updated_at' => '2023-07-20 10:53:22',
                'deleted_at' => NULL,
                'id_reservation' => 41,
                'id_item' => 1,
                'total_room' => 0,
            ),
            161 => 
            array (
                'id_slot' => 162,
                'created_at' => '2023-07-20 10:53:22',
                'updated_at' => '2023-07-20 10:53:22',
                'deleted_at' => NULL,
                'id_reservation' => 41,
                'id_item' => 2,
                'total_room' => 0,
            ),
            162 => 
            array (
                'id_slot' => 163,
                'created_at' => '2023-07-20 10:53:22',
                'updated_at' => '2023-07-20 10:53:22',
                'deleted_at' => NULL,
                'id_reservation' => 41,
                'id_item' => 3,
                'total_room' => 0,
            ),
            163 => 
            array (
                'id_slot' => 164,
                'created_at' => '2023-07-20 10:53:22',
                'updated_at' => '2023-07-20 10:53:22',
                'deleted_at' => NULL,
                'id_reservation' => 41,
                'id_item' => 4,
                'total_room' => 1,
            ),
            164 => 
            array (
                'id_slot' => 165,
                'created_at' => '2023-07-20 10:53:31',
                'updated_at' => '2023-07-20 10:53:31',
                'deleted_at' => NULL,
                'id_reservation' => 42,
                'id_item' => 1,
                'total_room' => 1,
            ),
            165 => 
            array (
                'id_slot' => 166,
                'created_at' => '2023-07-20 10:53:31',
                'updated_at' => '2023-07-20 10:53:31',
                'deleted_at' => NULL,
                'id_reservation' => 42,
                'id_item' => 2,
                'total_room' => 0,
            ),
            166 => 
            array (
                'id_slot' => 167,
                'created_at' => '2023-07-20 10:53:31',
                'updated_at' => '2023-07-20 10:53:31',
                'deleted_at' => NULL,
                'id_reservation' => 42,
                'id_item' => 3,
                'total_room' => 0,
            ),
            167 => 
            array (
                'id_slot' => 168,
                'created_at' => '2023-07-20 10:53:31',
                'updated_at' => '2023-07-20 10:53:31',
                'deleted_at' => NULL,
                'id_reservation' => 42,
                'id_item' => 4,
                'total_room' => 0,
            ),
            168 => 
            array (
                'id_slot' => 169,
                'created_at' => '2023-07-20 10:53:37',
                'updated_at' => '2023-07-20 10:53:37',
                'deleted_at' => NULL,
                'id_reservation' => 43,
                'id_item' => 1,
                'total_room' => 2,
            ),
            169 => 
            array (
                'id_slot' => 170,
                'created_at' => '2023-07-20 10:53:37',
                'updated_at' => '2023-07-20 10:53:37',
                'deleted_at' => NULL,
                'id_reservation' => 43,
                'id_item' => 2,
                'total_room' => 0,
            ),
            170 => 
            array (
                'id_slot' => 171,
                'created_at' => '2023-07-20 10:53:37',
                'updated_at' => '2023-07-20 10:53:37',
                'deleted_at' => NULL,
                'id_reservation' => 43,
                'id_item' => 3,
                'total_room' => 0,
            ),
            171 => 
            array (
                'id_slot' => 172,
                'created_at' => '2023-07-20 10:53:37',
                'updated_at' => '2023-07-20 10:53:37',
                'deleted_at' => NULL,
                'id_reservation' => 43,
                'id_item' => 4,
                'total_room' => 0,
            ),
            172 => 
            array (
                'id_slot' => 173,
                'created_at' => '2023-07-20 10:53:47',
                'updated_at' => '2023-07-20 10:53:47',
                'deleted_at' => NULL,
                'id_reservation' => 44,
                'id_item' => 1,
                'total_room' => 0,
            ),
            173 => 
            array (
                'id_slot' => 174,
                'created_at' => '2023-07-20 10:53:47',
                'updated_at' => '2023-07-20 10:53:47',
                'deleted_at' => NULL,
                'id_reservation' => 44,
                'id_item' => 2,
                'total_room' => 1,
            ),
            174 => 
            array (
                'id_slot' => 175,
                'created_at' => '2023-07-20 10:53:47',
                'updated_at' => '2023-07-20 10:53:47',
                'deleted_at' => NULL,
                'id_reservation' => 44,
                'id_item' => 3,
                'total_room' => 0,
            ),
            175 => 
            array (
                'id_slot' => 176,
                'created_at' => '2023-07-20 10:53:47',
                'updated_at' => '2023-07-20 10:53:47',
                'deleted_at' => NULL,
                'id_reservation' => 44,
                'id_item' => 4,
                'total_room' => 0,
            ),
            176 => 
            array (
                'id_slot' => 177,
                'created_at' => '2023-07-20 10:53:58',
                'updated_at' => '2023-07-20 10:53:58',
                'deleted_at' => NULL,
                'id_reservation' => 45,
                'id_item' => 1,
                'total_room' => 4,
            ),
            177 => 
            array (
                'id_slot' => 178,
                'created_at' => '2023-07-20 10:53:58',
                'updated_at' => '2023-07-20 10:53:58',
                'deleted_at' => NULL,
                'id_reservation' => 45,
                'id_item' => 2,
                'total_room' => 0,
            ),
            178 => 
            array (
                'id_slot' => 179,
                'created_at' => '2023-07-20 10:53:58',
                'updated_at' => '2023-07-20 10:53:58',
                'deleted_at' => NULL,
                'id_reservation' => 45,
                'id_item' => 3,
                'total_room' => 0,
            ),
            179 => 
            array (
                'id_slot' => 180,
                'created_at' => '2023-07-20 10:53:58',
                'updated_at' => '2023-07-20 10:53:58',
                'deleted_at' => NULL,
                'id_reservation' => 45,
                'id_item' => 4,
                'total_room' => 0,
            ),
            180 => 
            array (
                'id_slot' => 181,
                'created_at' => '2023-07-20 10:54:07',
                'updated_at' => '2023-07-20 10:54:07',
                'deleted_at' => NULL,
                'id_reservation' => 46,
                'id_item' => 1,
                'total_room' => 0,
            ),
            181 => 
            array (
                'id_slot' => 182,
                'created_at' => '2023-07-20 10:54:07',
                'updated_at' => '2023-07-20 10:54:07',
                'deleted_at' => NULL,
                'id_reservation' => 46,
                'id_item' => 2,
                'total_room' => 1,
            ),
            182 => 
            array (
                'id_slot' => 183,
                'created_at' => '2023-07-20 10:54:07',
                'updated_at' => '2023-07-20 10:54:07',
                'deleted_at' => NULL,
                'id_reservation' => 46,
                'id_item' => 3,
                'total_room' => 0,
            ),
            183 => 
            array (
                'id_slot' => 184,
                'created_at' => '2023-07-20 10:54:07',
                'updated_at' => '2023-07-20 10:54:07',
                'deleted_at' => NULL,
                'id_reservation' => 46,
                'id_item' => 4,
                'total_room' => 0,
            ),
            184 => 
            array (
                'id_slot' => 185,
                'created_at' => '2023-07-20 10:54:14',
                'updated_at' => '2023-07-20 10:54:14',
                'deleted_at' => NULL,
                'id_reservation' => 47,
                'id_item' => 1,
                'total_room' => 0,
            ),
            185 => 
            array (
                'id_slot' => 186,
                'created_at' => '2023-07-20 10:54:14',
                'updated_at' => '2023-07-20 10:54:14',
                'deleted_at' => NULL,
                'id_reservation' => 47,
                'id_item' => 2,
                'total_room' => 1,
            ),
            186 => 
            array (
                'id_slot' => 187,
                'created_at' => '2023-07-20 10:54:14',
                'updated_at' => '2023-07-20 10:54:14',
                'deleted_at' => NULL,
                'id_reservation' => 47,
                'id_item' => 3,
                'total_room' => 0,
            ),
            187 => 
            array (
                'id_slot' => 188,
                'created_at' => '2023-07-20 10:54:14',
                'updated_at' => '2023-07-20 10:54:14',
                'deleted_at' => NULL,
                'id_reservation' => 47,
                'id_item' => 4,
                'total_room' => 0,
            ),
            188 => 
            array (
                'id_slot' => 189,
                'created_at' => '2023-07-20 10:54:28',
                'updated_at' => '2023-07-20 10:54:28',
                'deleted_at' => NULL,
                'id_reservation' => 48,
                'id_item' => 1,
                'total_room' => 0,
            ),
            189 => 
            array (
                'id_slot' => 190,
                'created_at' => '2023-07-20 10:54:28',
                'updated_at' => '2023-07-20 10:54:28',
                'deleted_at' => NULL,
                'id_reservation' => 48,
                'id_item' => 2,
                'total_room' => 1,
            ),
            190 => 
            array (
                'id_slot' => 191,
                'created_at' => '2023-07-20 10:54:28',
                'updated_at' => '2023-07-20 10:54:28',
                'deleted_at' => NULL,
                'id_reservation' => 48,
                'id_item' => 3,
                'total_room' => 0,
            ),
            191 => 
            array (
                'id_slot' => 192,
                'created_at' => '2023-07-20 10:54:28',
                'updated_at' => '2023-07-20 10:54:28',
                'deleted_at' => NULL,
                'id_reservation' => 48,
                'id_item' => 4,
                'total_room' => 0,
            ),
            192 => 
            array (
                'id_slot' => 193,
                'created_at' => '2023-07-20 10:54:36',
                'updated_at' => '2023-07-20 10:54:36',
                'deleted_at' => NULL,
                'id_reservation' => 49,
                'id_item' => 1,
                'total_room' => 0,
            ),
            193 => 
            array (
                'id_slot' => 194,
                'created_at' => '2023-07-20 10:54:36',
                'updated_at' => '2023-07-20 10:54:36',
                'deleted_at' => NULL,
                'id_reservation' => 49,
                'id_item' => 2,
                'total_room' => 0,
            ),
            194 => 
            array (
                'id_slot' => 195,
                'created_at' => '2023-07-20 10:54:36',
                'updated_at' => '2023-07-20 10:54:36',
                'deleted_at' => NULL,
                'id_reservation' => 49,
                'id_item' => 3,
                'total_room' => 1,
            ),
            195 => 
            array (
                'id_slot' => 196,
                'created_at' => '2023-07-20 10:54:36',
                'updated_at' => '2023-07-20 10:54:36',
                'deleted_at' => NULL,
                'id_reservation' => 49,
                'id_item' => 4,
                'total_room' => 0,
            ),
            196 => 
            array (
                'id_slot' => 197,
                'created_at' => '2023-07-20 10:54:42',
                'updated_at' => '2023-07-20 10:54:42',
                'deleted_at' => NULL,
                'id_reservation' => 50,
                'id_item' => 1,
                'total_room' => 0,
            ),
            197 => 
            array (
                'id_slot' => 198,
                'created_at' => '2023-07-20 10:54:42',
                'updated_at' => '2023-07-20 10:54:42',
                'deleted_at' => NULL,
                'id_reservation' => 50,
                'id_item' => 2,
                'total_room' => 0,
            ),
            198 => 
            array (
                'id_slot' => 199,
                'created_at' => '2023-07-20 10:54:42',
                'updated_at' => '2023-07-20 10:54:42',
                'deleted_at' => NULL,
                'id_reservation' => 50,
                'id_item' => 3,
                'total_room' => 1,
            ),
            199 => 
            array (
                'id_slot' => 200,
                'created_at' => '2023-07-20 10:54:42',
                'updated_at' => '2023-07-20 10:54:42',
                'deleted_at' => NULL,
                'id_reservation' => 50,
                'id_item' => 4,
                'total_room' => 0,
            ),
        ));
        
        
    }
}