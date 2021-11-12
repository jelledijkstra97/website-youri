<a class="card hover" href="{{ isset($link) ? $link : '#' }}">
    <div class="icon">
        <img src="{{ $icon }}" alt="{{ $title }}">
    </div>
    <div class="text">
        <div class="title text-bold">{{ $title }}</div>
        <div class="body">
            {!! nl2br($body) !!}
        </div>
    </div>
</a>