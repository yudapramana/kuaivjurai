<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Log;
use Illuminate\Support\Facades\Artisan;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        
        $data = [
            ['name' => 'Super Administrator', 'username' => 'superadmin', 'email' => 'pramanayuda772@gmail.com', 'password' => Hash::make('1000kali'), 'current_role_id' => 1, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Owner Pandan View', 'username' => 'owner', 'email' => 'owner@pandanviewmandeh.com', 'password' => Hash::make('ownerpandan'), 'current_role_id' => 2, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Admin Pandan View', 'username' => 'admin', 'email' => 'admin@pandanviewmandeh.com', 'password' => Hash::make('adminpandan'), 'current_role_id' => 3, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Pindo Marketing', 'username' => 'pindo', 'email' => 'pindo@pandanviewmandeh.com', 'password' => Hash::make('pindopandan'), 'current_role_id' => 4, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()],
            ['name' => 'Pandu Marketing', 'username' => 'pandu', 'email' => 'pandu@pandanviewmandeh.com', 'password' => Hash::make('pandupandan'), 'current_role_id' => 4, 'created_at' =>  \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]
        ];


        foreach ($data as $key => $item) {
            \App\Models\User::firstOrCreate(
                ['username' => $item['username']],
                $item
            );
        }

        
    }
}
