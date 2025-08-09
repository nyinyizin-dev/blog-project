<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Blog::truncate();
        Category::truncate();
        User::factory()->create();

        $forntend = Category::create([
            'name' => 'frontend',
            'slug' => 'frontend'
        ]);
        $backend = Category::create([
            'name' => 'backend',
            'slug' => 'backend'
        ]);

        Blog::create([
            'title' => 'frontend post',
            'slug' => 'forntend-post',
            'intro' => 'this is intro',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque risus eu blandit placerat. Nam ultrices nunc eu nibh fermentum scelerisque a et justo. Donec gravida quis massa in sagittis. Nunc facilisis tristique lorem et feugiat. Morbi fringilla quam lorem. Vivamus suscipit eu nibh et varius. Aenean id condimentum turpis. Nunc mollis quis lectus et lobortis. Suspendisse in imperdiet tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc eget ipsum nec ex feugiat sagittis.

            Suspendisse dictum posuere justo sed eleifend. Pellentesque eleifend in odio sodales euismod. Praesent vulputate erat elit, eget tincidunt libero efficitur quis. Aenean scelerisque, lectus ut pellentesque sodales, augue dolor maximus magna, quis vulputate justo eros vel dui. Nam laoreet dui sit amet nisi accumsan consectetur. Sed facilisis laoreet metus, eu vulputate nunc faucibus et. Aliquam dignissim porta nulla non congue. Quisque lobortis turpis porta dui suscipit, vitae suscipit enim venenatis. Donec consequat tincidunt massa eget blandit. Vivamus placerat est et nibh bibendum euismod. Etiam a varius enim, sed ultrices libero. Aliquam blandit magna enim, ac volutpat turpis viverra non.',
            'category_id' => $forntend->id
        ]);
        Blog::create([
            'title' => 'backend post',
            'slug' => 'backend-post',
            'intro' => 'this is intro',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque risus eu blandit placerat. Nam ultrices nunc eu nibh fermentum scelerisque a et justo. Donec gravida quis massa in sagittis. Nunc facilisis tristique lorem et feugiat. Morbi fringilla quam lorem. Vivamus suscipit eu nibh et varius. Aenean id condimentum turpis. Nunc mollis quis lectus et lobortis. Suspendisse in imperdiet tortor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc eget ipsum nec ex feugiat sagittis.

            Suspendisse dictum posuere justo sed eleifend. Pellentesque eleifend in odio sodales euismod. Praesent vulputate erat elit, eget tincidunt libero efficitur quis. Aenean scelerisque, lectus ut pellentesque sodales, augue dolor maximus magna, quis vulputate justo eros vel dui. Nam laoreet dui sit amet nisi accumsan consectetur. Sed facilisis laoreet metus, eu vulputate nunc faucibus et. Aliquam dignissim porta nulla non congue. Quisque lobortis turpis porta dui suscipit, vitae suscipit enim venenatis. Donec consequat tincidunt massa eget blandit. Vivamus placerat est et nibh bibendum euismod. Etiam a varius enim, sed ultrices libero. Aliquam blandit magna enim, ac volutpat turpis viverra non.',
            'category_id' => $backend->id
        ]);
    }
}
