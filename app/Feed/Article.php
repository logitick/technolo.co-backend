<?php

namespace App\Feed;


class Article
{
    protected $title;
    protected $summary;
    protected $image;
    protected $articleUrl;
    protected $sourceUrl;
    protected $points;

    /**
     * Article constructor.
     * @param $title
     * @param $summary
     * @param $articleUrl
     * @param $image
     * @param $sourceUrl
     * @param $points
     */
    public function __construct(string $title, string $summary, string $articleUrl, ?string $image = null, ?string $sourceUrl = null, ?int $points = null)
    {
        $this->title = $title;
        $this->summary = $summary;
        $this->articleUrl = $articleUrl;
        $this->sourceUrl = $sourceUrl;
        $this->points = $points;
        $this->image = $image;
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @return mixed
     */
    public function getArticleUrl()
    {
        return $this->articleUrl;
    }

    /**
     * @return mixed
     */
    public function getSourceUrl()
    {
        return $this->sourceUrl;
    }

    /**
     * @return mixed
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }
}