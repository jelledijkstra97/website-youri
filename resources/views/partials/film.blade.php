<?php
    $pageKey = 'film';

    $videos = [
        ['title' => 'Tijdreizigers', 'thumb' => 'assets/thumbnails/THUMBNAIL-1.png', 'url' => 'https://www.youtube.com/embed/watch?v=pF6XcXfcKNc&list=PLZACDBMtuTVfd-arBBSfaEKcdckjAzgbf&index=1'],
        ['title' => 'Iedereen is leerling', 'thumb' => 'assets/thumbnails/THUMBNAIL-2.png', 'url' => 'https://www.youtube.com/embed/watch?v=c6BloygNyek&list=PLZACDBMtuTVfd-arBBSfaEKcdckjAzgbf&index=2'],
        ['title' => 'Kasteel Duivenvoorde', 'thumb' => 'assets/thumbnails/THUMBNAIL-3.png', 'url' => 'https://www.youtube.com/embed/watch?v=7srAMS0U_So&list=PLZACDBMtuTVfd-arBBSfaEKcdckjAzgbf&index=3'],
        ['title' => 'Thanks a million, New York', 'thumb' => 'assets/thumbnails/THUMBNAIL-4.png', 'url' => 'https://www.youtube.com/embed/watch?v=IFvwBah1xs8&list=PLZACDBMtuTVfd-arBBSfaEKcdckjAzgbf&index=4'],
        ['title' => 'T-Mobile Nederland', 'thumb' => 'assets/thumbnails/THUMBNAIL-5.png', 'url' => 'https://www.youtube.com/embed/watch?v=cFnoFJY30Fo&list=PLZACDBMtuTVfd-arBBSfaEKcdckjAzgbf&index=5'],
        ['title' => 'Telekom Shift', 'thumb' => 'assets/thumbnails/THUMBNAIL-6.png', 'url' => 'https://www.youtube.com/embed/watch?v=iCRGhEMzTnA&list=PLZACDBMtuTVfd-arBBSfaEKcdckjAzgbf&index=6'],
        ['title' => 'Kasteel Duivenvoorde', 'thumb' => 'assets/thumbnails/THUMBNAIL-7.png', 'url' => 'https://www.youtube.com/embed/watch?v=dpAa55FtIJ8&list=PLZACDBMtuTVfd-arBBSfaEKcdckjAzgbf&index=7'],
        ['title' => 'T-Mobile Nederland', 'thumb' => 'assets/thumbnails/THUMBNAIL-8.png', 'url' => 'https://www.youtube.com/embed/watch?v=0-FTvtNK78g&list=PLZACDBMtuTVfd-arBBSfaEKcdckjAzgbf&index=8'],
        ['title' => 'T-Mobile Nederland & FC Utrecht', 'thumb' => 'assets/thumbnails/THUMBNAIL-9.png', 'url' => 'https://www.youtube.com/embed/watch?v=uIWA8d0bqkk&list=PLZACDBMtuTVfd-arBBSfaEKcdckjAzgbf&index=9']
    ]
?>

@extends('templates.split-block', [
    'pageKey' => $pageKey,
    'layout' => '60-40',
    'flipsHeader' => true,
    'part1ContainerClass' => 'slider'
])

@section($pageKey.'-part1')
    <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider="center: true;">
        <ul class="uk-slider-items">
            @foreach ($videos as $video)
            <li class="uk-width-3-4">
                <img class="film-thumbnail" title="{{ $video['title'] }}" url="{{ $video['url'] }}" src="{{ $video['thumb'] }}">
            </li>
            @endforeach
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <div class="modal">
        <!-- Button will be clicked programmatically -->
        <button id="film-modal-toggle" uk-toggle="target: #film-modal" type="button" style="display: none;"></button>
        <div id="film-modal" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                <h2 class="uk-modal-title"></h2>
                <button class="uk-modal-close-outside" type="button" uk-close></button>

                <div class="iframe-container">
                    <iframe class="responsive-iframe" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>
@endsection

@section($pageKey.'-part2')
<div class="text">
    <div class="title text-bold">Film</div>
    <div class="body">
        Licht, camera, Youri. Videocontent is haast niet meer weg te denken voor bedrijven en instanties. Door de jarenlange ervaring in het maken van Social Content en bedrijfsfilm tilt Youri zijn producties tot een hoger niveau, met treffende inhoud en een vlijmscherp randje.
    </div>
</div>
@endsection