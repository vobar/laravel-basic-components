@extends('layouts.guest')

@props(['news', 'breadcrumbs', 'is_action'])

@section('content')
    <section class="block-recommends mt-100 overflow-hidden">
        @include('components.common.breadcrumbs', ['breadcrumbs' => $breadcrumbs])

        @include('components.common.h2', ['h2' => 'Новости и акции'])

        @include('components.news-filter', ['is_action' => $is_action])

        <section class="" id="news-container">
            @if($news)
                @include('components.news-paginate-items', ['news' => $news])
            @endif
        </section>

        <div class="">
            <a href="#" class="" id="get-next-news-page" data-pages="{{ $news->lastPage() }}">показать больше</a>
        </div>
    </section>
@endsection
