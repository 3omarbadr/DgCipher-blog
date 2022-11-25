<?php

namespace App\Http\Services;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;


class ArticleService
{
    public function store(StoreArticleRequest $request)
    {
        $attributes = $request->validated();
        if ($request->thumbnail) {
            $attributes['thumbnail'] = $this->imageService->store($request->thumbnail, public_path('articles'));
        }
        $article = Article::create($attributes);
        return $article;
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        $attributes = $request->validated();
        if ($request->thumbnail) {
            $attributes['thumbnail'] = $this->imageService->delete($article->thumbnail, public_path('articles'));
        }
        Article::create($request->validated());
    }

    public function delete(Article $article)
    {
        $this->imageService->delete($article->thumbnail, public_path('articles'));
        $article->delete();
    }
}
