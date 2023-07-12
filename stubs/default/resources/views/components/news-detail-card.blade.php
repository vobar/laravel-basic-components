@props(['news_item'])

<section class="">
    <div class="">
        <div class="">
            <div class="">
                {{-- //TODO media for slider need fix --}}
                {{--@foreach($news_item->getMedia('photos') as $photo)--}}
                {{--    <div class="slick-item">--}}
                {{--        <img src="{{ $photo->getFullUrl() }}" alt="">--}}
                {{--    </div>--}}
                {{--@endforeach--}}
            </div>
        </div>

        {{-- news inner text --}}
        <div class="">
            <article>
                {!! $news_item->text !!}
            </article>
        </div>
    </div>

    <div class="">
        <a href="{{ route('news.index') }}"
           class=""
        >Больше акций</a>
    </div>
</section>
