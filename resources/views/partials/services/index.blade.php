<?php
    $cards = [
        'Film' => [
            'link' => '#film',
            'icon' => 'assets/icons/film.png',
            'title' => 'Film',
            'body' => "Social content, bedrijfsfilm, cultureel, maatschappelijk, corporate… of een beetje van alles.\n\nYouri van der Starre biedt de complete videoproductie van concept tot eindmontage aan die volledig kan worden aangepast naar uw wensen."
        ],
        'Foto' => [
            'link' => '#photos',
            'icon' => 'assets/icons/foto.png',
            'title' => 'Foto',
            'body' => "Dat ene moment vastleggen waar u bij kan blijven wegdromen? De fotografie van vastgoed, evenementen, portretten en social content staat op het menu bij Youri van der Starre.\n\nZiet u fotografie liever op zijn authentiekst? Dan is analoge fotografie ook een optie."
        ],
        'Audio' => [
            'link' => '#audio',
            'icon' => 'assets/icons/audio.png',
            'title' => 'Audio',
            'body' => "Een audiotour over de verborgen parels uit uw museum, of toch liever een podcast over uw bedrijf?\n\nHet volledige pakket van concepting, opnames, montage en oplevering is mogelijk. "
        ]
    ];
?>

<div class="services desktop" id="services-large">
    <div class="container" uk-scrollspy="target: > a; cls: uk-animation-fade; delay: 100">
        @foreach ($cards as $key => $data)
            @include('partials.services.card', 
                [
                    'title' => $data['title'],
                    'icon' => $data['icon'],
                    'body' => $data['body'],
                    'link' => isset($data['link']) ? $data['link'] : '#'
                ]
            )
        @endforeach
    </div>
</div>

<div id="services-small" class="services phone full-height">
    <div class="container">
        <ul uk-accordion>
            @foreach ($cards as $key => $data)
            <li class="{{ $key === 'Film' ? 'uk-open' : '' }}">
                <a class="uk-accordion-title" href="#">
                    <div class="container">
                        <img src="{{ $data['icon'] }}" alt="{{ $data['title'] }}">
                        <span class="title">{{ $data['title'] }}</span>
                    </div>
                </a>
                <div class="uk-accordion-content">
                    <p>{{ $data['body'] }}</p>
                    <p class="portfolio-link">
                        <a href="{{ $data['link'] }}" class="portfolio-link">Naar portfolio</a>
                    </p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>