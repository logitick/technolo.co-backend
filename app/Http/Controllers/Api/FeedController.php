<?php
namespace App\Http\Controllers\Api;


use App\Feed\HackerNewsFeed;
use App\Http\Controllers\Controller;
use App\Transformers\ArticleTransformer;
use Dingo\Api\Routing\Helpers;

class FeedController extends Controller
{
    use Helpers;

    public function index()
    {
        $feed = new HackerNewsFeed();
        return $this->response->collection(collect($feed->getTopItems()), new ArticleTransformer(), ['key' => 'article']);
    }
}