<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'site.title',
                'display_name' => 'Site Title',
                'value' => 'Site Title',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Site',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'site.description',
                'display_name' => 'Site Description',
                'value' => 'Site Description',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Site',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'site.logo',
                'display_name' => 'Site Logo',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Site',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'display_name' => 'Google Analytics Tracking ID',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 44,
                'group' => 'Site',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'admin.bg_image',
                'display_name' => 'Admin Background Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 5,
                'group' => 'Admin',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'admin.title',
                'display_name' => 'Admin Title',
                'value' => 'La estrella',
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'admin.description',
                'display_name' => 'Admin Description',
                'value' => 'Welcome to Voyager. The Missing Admin for Laravel',
                'details' => '',
                'type' => 'text',
                'order' => 2,
                'group' => 'Admin',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'admin.loader',
                'display_name' => 'Admin Loader',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 3,
                'group' => 'Admin',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'admin.icon_image',
                'display_name' => 'Admin Icon Image',
                'value' => '',
                'details' => '',
                'type' => 'image',
                'order' => 4,
                'group' => 'Admin',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'value' => NULL,
                'details' => '',
                'type' => 'text',
                'order' => 1,
                'group' => 'Admin',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'site.slogan',
                'display_name' => 'Site Slogan',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 3,
                'group' => 'Site',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'banner.image_1',
                'display_name' => 'Image 1',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 6,
                'group' => 'Banner',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'banner.image_2',
                'display_name' => 'Image 2',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 7,
                'group' => 'Banner',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'features.title',
                'display_name' => 'Title',
                'value' => 'Feature',
                'details' => NULL,
                'type' => 'text',
                'order' => 8,
                'group' => 'Features',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'features.panel_1',
                'display_name' => 'Panel 1',
                'value' => '<div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
<div class="feature-1 text-center">
<div class="wrap-icon icon-1">
<span class="icon la la-user"></span>
</div>
<h3 class="mb-3">Digital Whiteboard</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
</div>
</div>',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 9,
                'group' => 'Features',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'features.panel_2',
                'display_name' => 'Panel 2',
                'value' => '<div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
<div class="feature-1 text-center">
<div class="wrap-icon icon-1">
<span class="icon la la-toggle-off"></span>
</div>
<h3 class="mb-3">Digital Whiteboard</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
</div>
</div>',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 10,
                'group' => 'Features',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'features.panel_3',
                'display_name' => 'Panel 3',
                'value' => '<div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
<div class="feature-1 text-center">
<div class="wrap-icon icon-1">
<span class="icon la la-umbrella"></span>
</div>
<h3 class="mb-3">Design To Development</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.</p>
</div>
</div>',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 11,
                'group' => 'Features',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'features.banner',
                'display_name' => 'Banner',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 12,
                'group' => 'Features',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'features.subtitle_1',
                'display_name' => 'Subtitle 1',
                'value' => 'Sign Up',
                'details' => NULL,
                'type' => 'text',
                'order' => 13,
                'group' => 'Features',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'features.description_1',
                'display_name' => 'Description 1',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 14,
                'group' => 'Features',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'features.subtitle_2',
                'display_name' => 'Subtitle 2',
                'value' => 'Create Profile',
                'details' => NULL,
                'type' => 'text',
                'order' => 15,
                'group' => 'Features',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'features.description_2',
                'display_name' => 'Description 2',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 16,
                'group' => 'Features',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'features.subtitle_3',
                'display_name' => 'Subtitle 3',
                'value' => 'Enjoy the app',
                'details' => NULL,
                'type' => 'text',
                'order' => 17,
                'group' => 'Features',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'features.description_3',
                'display_name' => 'Description 3',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, optio.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 18,
                'group' => 'Features',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'sections.title_1',
                'display_name' => 'Title 1',
                'value' => 'Seamlessly Communicate',
                'details' => NULL,
                'type' => 'text',
                'order' => 19,
                'group' => 'Sections',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'sections.description_1',
                'display_name' => 'Description 1',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidun dolore mollitia esse natus beatae.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 20,
                'group' => 'Sections',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'sections.image_1',
                'display_name' => 'Image 1',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 21,
                'group' => 'Sections',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'sections.title_2',
                'display_name' => 'Title 2',
                'value' => 'Seamlessly Communicate',
                'details' => NULL,
                'type' => 'text',
                'order' => 22,
                'group' => 'Sections',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'sections.description_2',
                'display_name' => 'Description 2',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidun dolore mollitia esse natus beatae.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 23,
                'group' => 'Sections',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'sections.image_2',
                'display_name' => 'Image 2',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 24,
                'group' => 'Sections',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'customer.title',
                'display_name' => 'Title',
                'value' => 'Review From Our Users',
                'details' => NULL,
                'type' => 'text',
                'order' => 25,
                'group' => 'Customer',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'customer.subtitle',
                'display_name' => 'Subtitle',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 26,
                'group' => 'Customer',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'team.title',
                'display_name' => 'Title',
                'value' => 'Our team',
                'details' => NULL,
                'type' => 'text',
                'order' => 27,
                'group' => 'Team',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'team.subtitle',
                'display_name' => 'Subtitle',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 28,
                'group' => 'Team',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'action.title',
                'display_name' => 'Title',
                'value' => 'Starts Publishing Your Apps',
                'details' => NULL,
                'type' => 'text',
                'order' => 29,
                'group' => 'Action',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'action.description',
                'display_name' => 'Description',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidun dolore mollitia esse natus beatae.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 30,
                'group' => 'Action',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'action.url',
                'display_name' => 'URL',
                'value' => '<a href="#" class="btn"><span class="icofont-ui-play mr-3"></span>Google play</a>',
                'details' => NULL,
                'type' => 'code_editor',
                'order' => 31,
                'group' => 'Action',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'social.facebook',
                'display_name' => 'Facebook',
                'value' => 'https://facebook.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 32,
                'group' => 'Social',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'social.twitter',
                'display_name' => 'Twitter',
                'value' => 'https://twitter.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 33,
                'group' => 'Social',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'social.instagram',
                'display_name' => 'Instagram',
                'value' => 'https://instagram.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 34,
                'group' => 'Social',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'social.whatsapp',
                'display_name' => 'Whastapp',
                'value' => '59175199157',
                'details' => NULL,
                'type' => 'text',
                'order' => 35,
                'group' => 'Social',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'social.youtube',
                'display_name' => 'Youtube',
                'value' => 'https://youtube.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 36,
                'group' => 'Social',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'social.github',
                'display_name' => 'Github',
                'value' => 'https://github.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 37,
                'group' => 'Social',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'social.linkedin',
                'display_name' => 'Linkedin',
                'value' => 'https://linkedin.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 38,
                'group' => 'Social',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'site.phones',
                'display_name' => 'Phones',
                'value' => '75199157',
                'details' => NULL,
                'type' => 'text',
                'order' => 39,
                'group' => 'Site',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'site.email',
                'display_name' => 'Email',
                'value' => 'buddy.m091@gmail.com',
                'details' => NULL,
                'type' => 'text',
                'order' => 40,
                'group' => 'Site',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'site.address',
                'display_name' => 'Address',
                'value' => 'Calle 18 de nov nro 12
233',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 41,
                'group' => 'Site',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'site.city',
                'display_name' => 'City',
                'value' => 'Trinidad',
                'details' => NULL,
                'type' => 'text',
                'order' => 42,
                'group' => 'Site',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'site.location',
                'display_name' => 'Location',
                'value' => NULL,
                'details' => NULL,
                'type' => 'text',
                'order' => 43,
                'group' => 'Site',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'sections.title',
                'display_name' => 'Title',
                'value' => 'Acerca de nosotros',
                'details' => NULL,
                'type' => 'text',
                'order' => 17,
                'group' => 'Sections',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'sections.description',
                'display_name' => 'Description',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 18,
                'group' => 'Sections',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'sections.title_3',
                'display_name' => 'Title 3',
                'value' => 'Seamlessly Communicate',
                'details' => NULL,
                'type' => 'text',
                'order' => 45,
                'group' => 'Sections',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'sections.description_3',
                'display_name' => 'Description 3',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidun dolore mollitia esse natus beatae.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 46,
                'group' => 'Sections',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'sections.image_3',
                'display_name' => 'Image 3',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 47,
                'group' => 'Sections',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'sections.title_4',
                'display_name' => 'Title 4',
                'value' => 'Seamlessly Communicate',
                'details' => NULL,
                'type' => 'text',
                'order' => 48,
                'group' => 'Sections',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'sections.description_4',
                'display_name' => 'Description 4',
                'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur at reprehenderit optio, laudantium eius quod, eum maxime molestiae porro omnis. Dolores aspernatur delectus impedit incidun dolore mollitia esse natus beatae.',
                'details' => NULL,
                'type' => 'text_area',
                'order' => 49,
                'group' => 'Sections',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'sections.image_4',
                'display_name' => 'Image 4',
                'value' => '',
                'details' => NULL,
                'type' => 'image',
                'order' => 50,
                'group' => 'Sections',
            ),
        ));
        
        
    }
}