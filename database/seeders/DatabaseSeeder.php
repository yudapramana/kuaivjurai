<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        $this->call(UsersTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(RolesTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        $this->call(ProductsTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(CarouselsTableSeeder::class);
        $this->call(MessagesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TestimoniesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        // $this->call(ReservationsTableSeeder::class);
        // $this->call(SlotsTableSeeder::class);
        $this->call(PostTagTableSeeder::class);
        $this->call(PostViewsTableSeeder::class);
    }
}
