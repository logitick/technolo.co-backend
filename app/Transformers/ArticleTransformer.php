<?php
namespace App\Transformers;


use App\Feed\Article;
use League\Fractal\TransformerAbstract;

class ArticleTransformer extends TransformerAbstract
{
    public function transform(Article $article)
    {
        return [
            'id' => $article->getId(),
            'title' => $article->getTitle(),
            'summary' => $article->getSummary(),
            'image' => $article->getImage(),
            'url' => $article->getArticleUrl(),
            'source' => 'hacker-news',
            'sourceUrl' => $article->getSourceUrl(),
            'points' => $article->getPoints(),
        ];
    }
}