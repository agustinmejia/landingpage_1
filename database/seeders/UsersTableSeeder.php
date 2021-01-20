<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$82SZMIcbiOVZ1LLW7I4dtOJpJqCJmDXv4PyBc0PkNHGr9OdK52kEK',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2021-01-19 05:17:08',
                'updated_at' => '2021-01-19 05:17:08',
            ),
        ));
        
        
    }
}