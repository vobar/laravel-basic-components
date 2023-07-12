<?php

namespace app\Http\Controllers;

use app\Models\News;
use Illuminate\Http\Request;

class NewsController
{

    public $itemsOnPage = 12;

    public function index(Request $request)
    {
        $breadcrumbs = [
            __('Главная') => '/',
            __('Новости и акции') => ''
        ];

        //flag to show only actions (not news)
        $is_action = $request->get('actions') ?? null;

        $news = (new News())
            ->active()
            ->when($is_action != null, function ($query) use ($is_action) {
                $query->where('is_action', $is_action);
            })
            ->paginate($this->itemsOnPage);

        return view('pages.news', compact('news', 'breadcrumbs', 'is_action'));
    }

    public function getIndexJsonPage(Request $request)
    {
        //flag to show only actions (not news)
        $is_action = $request->get('actions') ?? null;

        $news = (new News())
            ->active()
            ->when($is_action != null, function ($query) use ($is_action) {
                $query->where('is_action', $is_action);
            })
            ->paginate($this->itemsOnPage);

        return view('components.news-paginate-items', compact('news'));
    }

    public function show(string $slug)
    {
        $news_item = (new News())
            ->active() //scope active
            ->where('slug', $slug)
            ->firstOrFail();

        $breadcrumbs = [
            __('Главная') => '/',
            __('Новости и акции') => route('news.index'),
            $news_item->name => '' //TODO may be do it translatable
        ];

        return view('pages.news-detail', compact('news_item', 'breadcrumbs'));
    }
}