@extends('layouts.guest')

@props(['breadcrumbs', 'news_item'])

@section('content')

    @include('components.common.breadcrumbs', ['breadcrumbs' => $breadcrumbs])

    @include('components.common.h2', [ 'h2' => $news_item?->name ])

    @include('components.news-detail-card', ['news_item' => $news_item])

@endsection
