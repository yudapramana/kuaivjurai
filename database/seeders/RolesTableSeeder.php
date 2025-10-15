<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_administrator = Role::create(['name' => 'super_administrator']);
        $owner = Role::create(['name' => 'owner']);
        $administrator = Role::create(['name' => 'administrator']);
        $staff = Role::create(['name' => 'staff']);

        // Super Admin
        $user = User::where('username', 'superadmin')->first();
        $user->assignRole('super_administrator');

        // Owner
        $user = User::where('username', 'owner')->first();
        $user->assignRole('owner');

        // Administrator
        $user = User::where('username', 'admin')->first();
        $user->assignRole('administrator');

        // Staff Marketing
        $user = User::where('username', 'pindo')->first();
        $user->assignRole('staff');

        // Staff Marketing
        $user = User::where('username', 'pandu')->first();
        $user->assignRole('staff');

        // Permissions
        $permissionMenu1 = Permission::create(['name' => 'menu-dashboard']);
        $permissionMenu2 = Permission::create(['name' => 'menu-reservations']);
        $permissionMenu3 = Permission::create(['name' => 'menu-information']);
        $permissionMenu4 = Permission::create(['name' => 'menu-data']);
        $permissionMenu5 = Permission::create(['name' => 'menu-blog']);

        $permissionPage1_1 = Permission::create(['name' => 'page-dashboard']);

        $permissionPage2_1 = Permission::create(['name' => 'page-reservation-index']);
        $permissionPage2_2 = Permission::create(['name' => 'page-reservation-audits']);
        $permissionPage2_3 = Permission::create(['name' => 'page-reservation-deleted']);

        $permissionPage3_1 = Permission::create(['name' => 'page-information-services']);
        $permissionPage3_2 = Permission::create(['name' => 'page-information-products']);
        $permissionPage3_3 = Permission::create(['name' => 'page-information-galleries']);
        $permissionPage3_4 = Permission::create(['name' => 'page-information-carousels']);

        $permissionPage4_1 = Permission::create(['name' => 'page-data-messages']);
        $permissionPage4_2 = Permission::create(['name' => 'page-data-users']);
        $permissionPage4_3 = Permission::create(['name' => 'page-data-roles']);

        $permissionPage5_1 = Permission::create(['name' => 'page-blog-categories']);
        $permissionPage5_2 = Permission::create(['name' => 'page-blog-tags']);
        $permissionPage5_3 = Permission::create(['name' => 'page-blog-posts']);


        $super_administrator->givePermissionTo([
            $permissionMenu1, $permissionMenu2, $permissionMenu3, $permissionMenu4, $permissionMenu5,
            $permissionPage1_1,
            $permissionPage2_1, $permissionPage2_2, $permissionPage2_3,
            $permissionPage3_1, $permissionPage3_2, $permissionPage3_3, $permissionPage3_4,
            $permissionPage4_1, $permissionPage4_2, $permissionPage4_3,
            $permissionPage5_1, $permissionPage5_2, $permissionPage5_3
        ]);

        $administrator->givePermissionTo([
            $permissionMenu1, $permissionMenu2, $permissionMenu3, $permissionMenu4, $permissionMenu5,
            $permissionPage1_1,
            $permissionPage2_1, $permissionPage2_3,
            $permissionPage3_1, $permissionPage3_2, $permissionPage3_3, $permissionPage3_4,
            $permissionPage4_1, $permissionPage4_2,
            $permissionPage5_1, $permissionPage5_2, $permissionPage5_3
        ]);

        $owner->givePermissionTo([
            $permissionMenu1, $permissionMenu2, $permissionMenu3, $permissionMenu4, $permissionMenu5,
            $permissionPage1_1,
            $permissionPage2_1, $permissionPage2_3,
            $permissionPage3_1, $permissionPage3_2, $permissionPage3_3, $permissionPage3_4,
            $permissionPage4_1, $permissionPage4_2,
            $permissionPage5_1, $permissionPage5_2, $permissionPage5_3
        ]);

        $staff->givePermissionTo([
            $permissionMenu1, $permissionMenu2, $permissionMenu3, $permissionMenu4, $permissionMenu5,
            $permissionPage1_1,
            $permissionPage2_1, $permissionPage2_3,
            $permissionPage3_1, $permissionPage3_2, $permissionPage3_3, $permissionPage3_4,
            $permissionPage4_1,
            $permissionPage5_1, $permissionPage5_2, $permissionPage5_3
        ]);
    }
}
