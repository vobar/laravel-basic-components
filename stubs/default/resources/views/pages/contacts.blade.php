@extends('layouts.guest')

@props(['breadcrumbs', 'settings'])

@section('content')
    @include('components.common.breadcrumbs', ['breadcrumbs' => $breadcrumbs])

    @include('components.common.h2', ['h2' => 'Контакты'])

    @include('components.common.contacts', ['settings' => $settings])

    <div class="">
        @include('components.forms.feedback')
    </div>

@endsection

