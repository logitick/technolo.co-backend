<?php
namespace App\Feed;

interface NewsFeed
{
    public function getTopItems() : Article;
}