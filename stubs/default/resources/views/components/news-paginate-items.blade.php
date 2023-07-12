@props(['news'])

@foreach($news as $item)
    @include('components.news-card', ['item' => $item])
@endforeach
