<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Taufik Satya',
        //     'email' => 'taufik.satya09@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Michel Sabitzer',
        //     'email' => 'michelsabitzer@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Category::create([
        //     'name' => 'Web programming',
        //     'slug' => 'web-programming'
        // ]);

        // Category::create([
        //     'name' => 'Data science',
        //     'slug' => 'data-science'
        // ]);

        Post::factory(3)->create();

        // Post::create([
        //     'title' => 'First Title',
        //     'slug' => 'first-title',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ratione beatae atque alias minima perferendis accusamus quo dolorem veniam cupiditate molestiae eius autem',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ratione beatae atque alias minima perferendis accusamus quo dolorem veniam cupiditate molestiae eius autem, voluptatem libero consectetur facere error officiis. Error dicta laboriosam earum suscipit necessitatibus amet, sunt officia labore deleniti aperiam corrupti eveniet dignissimos voluptatum harum fugiat inventore in nemo fuga porro ex saepe. Architecto labore quae, iusto fugiat eaque ipsam sapiente enim fuga voluptatum praesentium nobis cum laboriosam suscipit quos aut quod tempore magni corporis ducimus, perspiciatis consequatur. Tenetur delectus libero eveniet hic quo temporibus soluta aspernatur blanditiis nesciunt itaque. Veniam dolores excepturi sunt labore, nobis ipsam voluptates odit ipsa consequuntur fugit magni ut expedita aliquid ex corporis? Ipsam quidem aperiam sint provident error perferendis minus vitae corporis voluptates esse, ut temporibus eos eum ratione voluptatibus fugit enim voluptate repellat! Dignissimos dolore ut aliquid doloremque ducimus aperiam, rerum laborum, totam pariatur vitae blanditiis commodi nostrum voluptates enim voluptatem quisquam!'
        // ]);

        // Post::create([
        //     'title' => 'Second Title',
        //     'slug' => 'second-title',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ratione beatae atque alias minima perferendis accusamus quo dolorem veniam cupiditate molestiae eius autem',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ratione beatae atque alias minima perferendis accusamus quo dolorem veniam cupiditate molestiae eius autem, voluptatem libero consectetur facere error officiis. Error dicta laboriosam earum suscipit necessitatibus amet, sunt officia labore deleniti aperiam corrupti eveniet dignissimos voluptatum harum fugiat inventore in nemo fuga porro ex saepe. Architecto labore quae, iusto fugiat eaque ipsam sapiente enim fuga voluptatum praesentium nobis cum laboriosam suscipit quos aut quod tempore magni corporis ducimus, perspiciatis consequatur. Tenetur delectus libero eveniet hic quo temporibus soluta aspernatur blanditiis nesciunt itaque. Veniam dolores excepturi sunt labore, nobis ipsam voluptates odit ipsa consequuntur fugit magni ut expedita aliquid ex corporis? Ipsam quidem aperiam sint provident error perferendis minus vitae corporis voluptates esse, ut temporibus eos eum ratione voluptatibus fugit enim voluptate repellat! Dignissimos dolore ut aliquid doloremque ducimus aperiam, rerum laborum, totam pariatur vitae blanditiis commodi nostrum voluptates enim voluptatem quisquam!'
        // ]);

        // Post::create([
        //     'title' => 'Third Title',
        //     'slug' => 'third-title',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ratione beatae atque alias minima perferendis accusamus quo dolorem veniam cupiditate molestiae eius autem',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ratione beatae atque alias minima perferendis accusamus quo dolorem veniam cupiditate molestiae eius autem, voluptatem libero consectetur facere error officiis. Error dicta laboriosam earum suscipit necessitatibus amet, sunt officia labore deleniti aperiam corrupti eveniet dignissimos voluptatum harum fugiat inventore in nemo fuga porro ex saepe. Architecto labore quae, iusto fugiat eaque ipsam sapiente enim fuga voluptatum praesentium nobis cum laboriosam suscipit quos aut quod tempore magni corporis ducimus, perspiciatis consequatur. Tenetur delectus libero eveniet hic quo temporibus soluta aspernatur blanditiis nesciunt itaque. Veniam dolores excepturi sunt labore, nobis ipsam voluptates odit ipsa consequuntur fugit magni ut expedita aliquid ex corporis? Ipsam quidem aperiam sint provident error perferendis minus vitae corporis voluptates esse, ut temporibus eos eum ratione voluptatibus fugit enim voluptate repellat! Dignissimos dolore ut aliquid doloremque ducimus aperiam, rerum laborum, totam pariatur vitae blanditiis commodi nostrum voluptates enim voluptatem quisquam!'
        // ]);

        // Post::create([
        //     'title' => 'Fourth Title',
        //     'slug' => 'fourth-title',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ratione beatae atque alias minima perferendis accusamus quo dolorem veniam cupiditate molestiae eius autem',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ratione beatae atque alias minima perferendis accusamus quo dolorem veniam cupiditate molestiae eius autem, voluptatem libero consectetur facere error officiis. Error dicta laboriosam earum suscipit necessitatibus amet, sunt officia labore deleniti aperiam corrupti eveniet dignissimos voluptatum harum fugiat inventore in nemo fuga porro ex saepe. Architecto labore quae, iusto fugiat eaque ipsam sapiente enim fuga voluptatum praesentium nobis cum laboriosam suscipit quos aut quod tempore magni corporis ducimus, perspiciatis consequatur. Tenetur delectus libero eveniet hic quo temporibus soluta aspernatur blanditiis nesciunt itaque. Veniam dolores excepturi sunt labore, nobis ipsam voluptates odit ipsa consequuntur fugit magni ut expedita aliquid ex corporis? Ipsam quidem aperiam sint provident error perferendis minus vitae corporis voluptates esse, ut temporibus eos eum ratione voluptatibus fugit enim voluptate repellat! Dignissimos dolore ut aliquid doloremque ducimus aperiam, rerum laborum, totam pariatur vitae blanditiis commodi nostrum voluptates enim voluptatem quisquam!'
        // ]);
    }
}
