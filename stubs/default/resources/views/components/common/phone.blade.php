@props(['phone'])

<a href="tel:{{'+' . preg_replace('/[^\p{L}\p{N}\s]/u', '', $phone)}}"
   class=""
>
    <svg width="22" height="22" viewBox="0 0 22 22" xmlns:xlink="http://www.w3.org/1999/xlink">
        <use class="phone" xlink:href="/img/sprite.svg#phone"></use>
    </svg>
    {{$phone ?? ''}}
</a>
