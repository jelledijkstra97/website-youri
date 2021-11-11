<?php
    $cards = [
        'Film' => [
            'icon' => 'assets/icons/film.png',
            'title' => 'Film',
            'body' => "Social content, bedrijfsfilm, cultureel/maatschappelijk, corporate… of een beetje van alles.\n\nYouri van der Starre biedt de complete videoproductie van concept tot eindmontage aan die volledig kan worden aangepast naar uw wensen."
        ],
        'Audio' => [
            'link' => '#audio',
            'icon' => 'assets/icons/audio.png',
            'title' => 'Audio',
            'body' => "Een audiotour over de verborgen parels uit uw museum, of toch liever een podcast over uw bedrijf?\n\nHet volledige pakket van concepting, opnames, montage en oplevering is mogelijk. "
        ],
        'Foto' => [
            'icon' => 'assets/icons/foto.png',
            'title' => 'Foto',
            'body' => "Dat ene moment vastleggen waar u bij kan blijven wegdromen? De fotografie van vastgoed, evenementen, portretten en social content staat op het menu bij Youri van der Starre.\n\nZiet u fotografie liever op zijn authentiekst? Dan is analoge fotografie ook een optie."
        ]
    ];
?>

<div class="services" id="services">
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