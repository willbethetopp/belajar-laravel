<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blogPosts = [
        [
            "title" => "First Post",
            "slug" => "first-post",
            "author" => "Muhamad Taufik Satya",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Beatae quam suscipit deserunt fuga quas, hic numquam reiciendis quidem id fugiat repudiandae consequatur nulla distinctio inventore voluptatum natus libero maxime facilis debitis quibusdam sint ab optio quae. Inventore culpa velit quaerat quos! Tempore molestias facilis perspiciatis atque explicabo porro asperiores enim consequuntur id in? Minima animi molestiae praesentium quae eum deleniti? Est inventore blanditiis cupiditate. Consequuntur expedita dolore sunt ipsa impedit est? Dolorum commodi voluptatibus quod ipsam perspiciatis ea, asperiores nihil?"
        ],
        [
            "title" => "Second Post",
            "slug" => "second-post",
            "author" => "Jack Ma",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt corporis officia debitis magni voluptatem. Laborum mollitia, incidunt quasi reiciendis hic corrupti magnam expedita odit fugit numquam aliquid est voluptatibus obcaecati nam dicta non id consectetur facilis, perferendis maiores tempora. Dolorum ipsa magni tenetur placeat ut rem natus eos quibusdam beatae optio error, est a aut inventore corporis quas officiis quae aperiam, blanditiis consectetur facere! Illo fugit temporibus repudiandae velit dolor quaerat pariatur quam. Vero, sed? Commodi dolores minus ea at, dolore magni quos distinctio inventore culpa odio neque porro repellat rem quae suscipit ipsa eius! Porro a omnis sequi explicabo."
        ]
    ];

    public static function all()
    {
        return collect(self::$blogPosts);
    }

    public static function find($slug)
    {
        $post = static::all();

        return $post->firstWhere('slug', $slug);
    }
}
