<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Inicio',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 17:10:41',
                'route' => 'voyager.dashboard',
                'parameters' => 'null',
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 17:09:17',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => 14,
                'order' => 1,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 17:09:25',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => 14,
                'order' => 2,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 17:09:30',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 17:10:30',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 17:09:17',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 17:09:17',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 17:09:17',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 6,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 17:09:17',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 17:09:17',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 7,
                'created_at' => '2021-01-19 05:16:38',
                'updated_at' => '2021-01-19 17:09:17',
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Clientes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => NULL,
                'parent_id' => 15,
                'order' => 1,
                'created_at' => '2021-01-19 17:06:33',
                'updated_at' => '2021-01-19 17:10:21',
                'route' => 'voyager.customers.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Empleados',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-group',
                'color' => NULL,
                'parent_id' => 15,
                'order' => 2,
                'created_at' => '2021-01-19 17:08:05',
                'updated_at' => '2021-01-19 17:10:24',
                'route' => 'voyager.people.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Seguridad',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2021-01-19 17:09:04',
                'updated_at' => '2021-01-19 17:09:30',
                'route' => NULL,
                'parameters' => '',
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Landing page',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2021-01-19 17:10:13',
                'updated_at' => '2021-01-19 17:10:30',
                'route' => NULL,
                'parameters' => '',
            ),
            15 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Productos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-gift',
                'color' => NULL,
                'parent_id' => 15,
                'order' => 3,
                'created_at' => '2021-05-05 20:10:38',
                'updated_at' => '2021-05-05 20:10:53',
                'route' => 'voyager.products.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}