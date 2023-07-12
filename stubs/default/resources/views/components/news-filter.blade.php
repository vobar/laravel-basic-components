@props(['is_action'])

<section class="">

    <div class="">
        <a
            href="{{ route('news.index') }}"
            class="{{ ($is_action === null)? 'active':'' }}"
        >показать все</a>
    </div>
    <div class="tabs__btn ">
        <a
            href="{{ route('news.index', ['actions' => 0]) }}"
            class="{{ ($is_action === "0")? 'active':'' }}"
        >Новости</a>
    </div>
    <div class="">
        <a
            href="{{ route('news.index', ['actions' => 1]) }}"
            class="{{ ($is_action === "1")? 'active':'' }}"
        >Акции</a>
    </div>

</section>
