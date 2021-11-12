<?php
    $pageKey = 'audio';
?>

@extends('templates.split-block', [
    'pageKey' => $pageKey, 
    'layout' => '40-60', 
    'flipsHeader' => true
])

@section($pageKey.'-part2')
<div class="text">
    <div class="title text-bold">Audio</div>
    <div class="body">
        Geïnteresseerd in het afnemen van een Podcastreeks? Een afspeellijst met gemonteerde podcastafleveringen is voor u samengesteld om een impressie te geven van Youri’s werk in dit vakgebied. Interesse in audiotours? Neem contact op via het contactformulier voor meer informatie.
    </div>
</div>
@endsection

@section($pageKey.'-part1')
<div class="widget">
    <iframe 
        src="https://open.spotify.com/embed/playlist/5QV2MHMBENcah6G2WuK09q" 
        width="300" 
        height="300" 
        frameBorder="0" 
        allowfullscreen="" 
        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
</div>
@endsection