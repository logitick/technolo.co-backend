<?php
namespace App\Feed;

use Faker;

class HackerNewsFeed implements NewsFeed
{
    public function getTopItems(): Article
    {
        $items = [];
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $items[] = new Article($faker->sentence(), $faker->paragraph(), $faker->url, $faker->imageUrl(), $faker->url, $faker->randomNumber());
        }

        return $items;
    }
}