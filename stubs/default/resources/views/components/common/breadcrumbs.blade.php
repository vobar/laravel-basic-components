@if($breadcrumbs)
    <nav aria-label="">
        <ol class="">
            @foreach($breadcrumbs as $name => $link)
                @if($link)
                    <li class=""><a href="{{ $link }}">{{ $name }}</a></li>
                @else
                    <li class="active" aria-current="page">{{ $name }}</li>
                @endif
            @endforeach
        </ol>
    </nav>
@endif
