<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController
{
    public function index()
    {
        $news = News::select(['title'])->get();

        return response()->json([
            'news' => $news,
        ]);
    }
}