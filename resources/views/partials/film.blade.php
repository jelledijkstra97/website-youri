<?php
    $pageKey = 'film';

    $videos = [
        'https://www.youtube.com/embed/c6BloygNyek',
        'https://www.youtube.com/embed/IFvwBah1xs8'
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
            @foreach (range(1, 5) as $thumb)
            <li>
                <div class="thumb-placeholder film-thumbnail" title="Thumb {{ $thumb }}" url="{{ $videos[$thumb % 2] }}">
                    Thumb {{ $thumb }}
                </div>
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
                <!-- <h2 class="uk-modal-title"></h2> -->
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