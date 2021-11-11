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
    'layout' => '60-40',
    'pageKey' => $pageKey,
    'part1ContainerClass' => 'slider'
])

@section($pageKey.'-part1')
    <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider="center: true;">
        <ul class="uk-slider-items">
            @foreach ($photos as $image)
            <li>
                <img src="assets/images/{{ $image }}">
            </li>
            @endforeach
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>
@endsection

@section($pageKey.'-part2')
    <div>

    </div>
@endsection