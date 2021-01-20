<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 05:16:38',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_customers',
                'table_name' => 'customers',
                'created_at' => '2021-01-19 17:06:33',
                'updated_at' => '2021-01-19 17:06:33',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_customers',
                'table_name' => 'customers',
                'created_at' => '2021-01-19 17:06:33',
                'updated_at' => '2021-01-19 17:06:33',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_customers',
                'table_name' => 'customers',
                'created_at' => '2021-01-19 17:06:33',
                'updated_at' => '2021-01-19 17:06:33',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_customers',
                'table_name' => 'customers',
                'created_at' => '2021-01-19 17:06:33',
                'updated_at' => '2021-01-19 17:06:33',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_customers',
                'table_name' => 'customers',
                'created_at' => '2021-01-19 17:06:33',
                'updated_at' => '2021-01-19 17:06:33',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_people',
                'table_name' => 'people',
                'created_at' => '2021-01-19 17:08:05',
                'updated_at' => '2021-01-19 17:08:05',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_people',
                'table_name' => 'people',
                'created_at' => '2021-01-19 17:08:05',
                'updated_at' => '2021-01-19 17:08:05',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_people',
                'table_name' => 'people',
                'created_at' => '2021-01-19 17:08:05',
                'updated_at' => '2021-01-19 17:08:05',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_people',
                'table_name' => 'people',
                'created_at' => '2021-01-19 17:08:05',
                'updated_at' => '2021-01-19 17:08:05',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_people',
                'table_name' => 'people',
                'created_at' => '2021-01-19 17:08:05',
                'updated_at' => '2021-01-19 17:08:05',
            ),
        ));
        
        
    }
}