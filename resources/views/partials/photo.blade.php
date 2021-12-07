<?php
    $pageKey = 'photos';

    $photos = [
        'WebsiteYS-01.jpg',
        'WebsiteYS-02.jpg',
        'WebsiteYS-03.jpg',
        'WebsiteYS-04.jpg',
        'WebsiteYS-05.jpg',
        'WebsiteYS-06.jpg',
        'WebsiteYS-07.jpg',
        'WebsiteYS-08.jpg',
        'WebsiteYS-09.jpg',
        'WebsiteYS-10.jpg',
        'WebsiteYS-11.jpg',
        'WebsiteYS-12.jpg',
        'WebsiteYS-13.jpg',
        'WebsiteYS-14.jpg',
        'WebsiteYS-15.jpg'
    ];
?>

@extends('templates.split-block', [
    'layout' => '30-70',
    'pageKey' => $pageKey,
    'part2ContainerClass' => 'slider',
    'topPart' => 'part2',
    'fullHeight' => true
])

@section($pageKey.'-part2')
    <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider="center: true; autoplay: true; autoplay-interval: 3000; pause-on-hover: true;">
        <ul class="uk-slider-items">
            @foreach ($photos as $image)
            <li>
                <img src="assets/images/{{ $image }}" onContextMenu="return false;">
            </li>
            @endforeach
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>
@endsection

@section($pageKey.'-part1')
    <div>
        <div class="text" uk-scrollspy="cls:uk-animation-slide-left">
            <div class="title text-bold">Fotografie</div>
            <div class="body">
                Onze wereld gaat snel, wij bewegen met haar mee. Maar met één druk op de knop… staat hij soms heel even stil. Youri’s fotografie van outdoor, vastgoed, evenementen, portretten en social content doelt op een effectief resultaat waar “u” tegen gezegd kan worden. 
            </div>
        </div>
    </div>
@endsection