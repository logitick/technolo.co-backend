<?php
namespace App\Feed;

use Faker;
use GuzzleHttp\Client;

class HackerNewsFeed implements NewsFeed
{

    private $client;

    public function __construct()
    {

        $this->client = new Client();
    }

    public function getTopItems(): array
    {
        $res = $this->client->request('GET', 'https://hacker-news.firebaseio.com/v0/topstories.json');
        $items = collect(json_decode($res->getBody()->getContents(), JSON_OBJECT_AS_ARRAY))
            ->take(10)
            ->each(function($id){
                $this->retrieveArticle($id);
            });



        var_dump($items);
        die();

        $items = [];
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $items[] = new Article($faker->sentence(), $faker->paragraph(), $faker->url, $faker->imageUrl(), $faker->url, $faker->randomNumber());
        }

        return $items;
    }

    private function retrieveArticle($id) {
        $url = "https://hacker-news.firebaseio.com/v0/item/$id.json";
        $res = $this->client->request('GET', $url);

        var_dump(json_decode($res->getBody()->getContents(), JSON_OBJECT_AS_ARRAY));
        die();
    }
}