<?php
namespace App\Feed;

interface NewsFeed
{
    /**
     * @return Article[]
     */
    public function getTopItems() : array;
}