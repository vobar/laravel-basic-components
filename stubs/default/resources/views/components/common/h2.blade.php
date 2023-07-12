@props(['h2'])

<div class="container mt-50">
    <div class="row">
        <div class="col">
            <h2>
                {{ $h2 ?? 'не выставлен заголовок' }}
            </h2>
        </div>
    </div>
</div>
