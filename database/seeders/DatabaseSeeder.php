<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create(
            [
                'name' => 'irsyad',
                'username'=>'irsyad',
                'email'=> 'irsyad@gmail.com',
                'password' => bcrypt('password')
            ]
            );
        User::factory(3)->create();

        
        Category::create(
            [
                'name' => 'Coding',
                'slug' => 'coding'
            ]
            );
        Category::create(
            [
                'name' => 'Personal',
                'slug' => 'personal'
            ]
            );

        Post::factory(20)->create();

        

        //     User::create(
        //         [
        //             'name' => 'aliyahya',
        //             'email'=> 'aliyahya@gmail.com',
        //             'password' => bcrypt('password')
        //         ]
        //         );

            // Post::create(
            //     [
            //     'title' => 'Judul Pertama',
            //     'category_id'=> 1,
            //     'user_id' =>1,
            //     'slug' => 'judul-pertama',
            //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur ea vel quis quaerat minima tempora expedita aut molestias, molestiae doloremque debitis modi earum soluta assumenda velit! Ratione fuga delectus ea in laudantium adipisci consequatur magnam molestiae illum. Provident, quas impedit. Error, animi repudiandae? Porro est quis dolorum aut aliquam, maxime rem itaque eius modi? Similique soluta, corrupti earum cupiditate porro ipsum voluptatibus minima deleniti veniam expedita possimus odit vero a eos magnam perspiciatis laboriosam, iure doloribus dignissimos? Mollitia, nesciunt molestiae.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur ea vel quis quaerat minima tempora expedita aut molestias, molestiae doloremque debitis modi earum soluta assumenda velit! Ratione fuga delectus ea in laudantium adipisci consequatur magnam molestiae illum. Provident, quas impedit. Error, animi repudiandae? Porro est quis dolorum aut aliquam, maxime rem itaque eius modi? Similique soluta, corrupti earum cupiditate porro ipsum voluptatibus minima deleniti veniam expedita possimus odit vero a eos magnam perspiciatis laboriosam, iure doloribus dignissimos? Mollitia, nesciunt molestiae.</p>'
            
            //     ]
            //     );
            // Post::create(
            //         [
            //         'title' => 'Judul Kedua',
            //         'category_id'=> 1,
            //         'user_id' =>1,
            //         'slug' => 'judul-kedua',
            //         'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            //         'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur ea vel quis quaerat minima tempora expedita aut molestias, molestiae doloremque debitis modi earum soluta assumenda velit! Ratione fuga delectus ea in laudantium adipisci consequatur magnam molestiae illum. Provident, quas impedit. Error, animi repudiandae? Porro est quis dolorum aut aliquam, maxime rem itaque eius modi? Similique soluta, corrupti earum cupiditate porro ipsum voluptatibus minima deleniti veniam expedita possimus odit vero a eos magnam perspiciatis laboriosam, iure doloribus dignissimos? Mollitia, nesciunt molestiae.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur ea vel quis quaerat minima tempora expedita aut molestias, molestiae doloremque debitis modi earum soluta assumenda velit! Ratione fuga delectus ea in laudantium adipisci consequatur magnam molestiae illum. Provident, quas impedit. Error, animi repudiandae? Porro est quis dolorum aut aliquam, maxime rem itaque eius modi? Similique soluta, corrupti earum cupiditate porro ipsum voluptatibus minima deleniti veniam expedita possimus odit vero a eos magnam perspiciatis laboriosam, iure doloribus dignissimos? Mollitia, nesciunt molestiae.</p>'
                
            //         ]
            //         );
            // Post::create(
            //             [
            //             'title' => 'Judul Ketiga',
            //             'category_id'=> 2,
            //             'user_id' =>1,
            //             'slug' => 'judul-ketiga',
            //             'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            //             'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur ea vel quis quaerat minima tempora expedita aut molestias, molestiae doloremque debitis modi earum soluta assumenda velit! Ratione fuga delectus ea in laudantium adipisci consequatur magnam molestiae illum. Provident, quas impedit. Error, animi repudiandae? Porro est quis dolorum aut aliquam, maxime rem itaque eius modi? Similique soluta, corrupti earum cupiditate porro ipsum voluptatibus minima deleniti veniam expedita possimus odit vero a eos magnam perspiciatis laboriosam, iure doloribus dignissimos? Mollitia, nesciunt molestiae.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur ea vel quis quaerat minima tempora expedita aut molestias, molestiae doloremque debitis modi earum soluta assumenda velit! Ratione fuga delectus ea in laudantium adipisci consequatur magnam molestiae illum. Provident, quas impedit. Error, animi repudiandae? Porro est quis dolorum aut aliquam, maxime rem itaque eius modi? Similique soluta, corrupti earum cupiditate porro ipsum voluptatibus minima deleniti veniam expedita possimus odit vero a eos magnam perspiciatis laboriosam, iure doloribus dignissimos? Mollitia, nesciunt molestiae.</p>'
                    
            //             ]
            //             );

            // Post::create(
            //                 [
            //                 'title' => 'Judul Empat',
            //                 'category_id'=> 2,
            //                 'user_id' =>2,
            //                 'slug' => 'judul-empat',
            //                 'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            //                 'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur ea vel quis quaerat minima tempora expedita aut molestias, molestiae doloremque debitis modi earum soluta assumenda velit! Ratione fuga delectus ea in laudantium adipisci consequatur magnam molestiae illum. Provident, quas impedit. Error, animi repudiandae? Porro est quis dolorum aut aliquam, maxime rem itaque eius modi? Similique soluta, corrupti earum cupiditate porro ipsum voluptatibus minima deleniti veniam expedita possimus odit vero a eos magnam perspiciatis laboriosam, iure doloribus dignissimos? Mollitia, nesciunt molestiae.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur ea vel quis quaerat minima tempora expedita aut molestias, molestiae doloremque debitis modi earum soluta assumenda velit! Ratione fuga delectus ea in laudantium adipisci consequatur magnam molestiae illum. Provident, quas impedit. Error, animi repudiandae? Porro est quis dolorum aut aliquam, maxime rem itaque eius modi? Similique soluta, corrupti earum cupiditate porro ipsum voluptatibus minima deleniti veniam expedita possimus odit vero a eos magnam perspiciatis laboriosam, iure doloribus dignissimos? Mollitia, nesciunt molestiae.</p>'
                        
            //                 ]
            //                 );
            
            
        }
}