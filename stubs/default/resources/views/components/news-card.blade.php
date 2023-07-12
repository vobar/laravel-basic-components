@props(['item'])

<a href="{{route('news.show', $item->slug)}}"
   class=""
>
    @if($item?->getFirstMediaUrl('photos'))
        <div class="">
            <img src="{{$item->getFirstMediaUrl('photos')}}"
                 alt=""
                 title=""
            />
        </div>
    @else
        <div class="">
            <img src="/img/products/2-1.jpg"
                 alt=""
                 title=""
            />
        </div>
    @endif

    <div class="">
        {{ $item->name }}
    </div>

    <div class="">
        <button type="button" class="">подробнее</button>
    </div>

</a>

