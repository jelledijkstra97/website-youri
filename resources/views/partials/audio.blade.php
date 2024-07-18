<?php
    $pageKey = 'audio';
?>

@extends('templates.split-block', [
    'pageKey' => $pageKey, 
    'layout' => '50-50', 
    'flipsHeader' => true,
    'fullHeight' => true
])

@section($pageKey.'-part2')
<div class="text" uk-scrollspy="cls:uk-animation-slide-right">
    <div class="title text-bold">Audio</div>
    <div class="body">
        Geïnteresseerd in het afnemen van een Podcastreeks? Een afspeellijst met gemonteerde podcastafleveringen is voor u samengesteld om een impressie te geven van Youri’s werk in dit vakgebied. Interesse in audiotours? Neem contact op via het contactformulier voor meer informatie.
    </div>
</div>
@endsection

@section($pageKey.'-part1')
<div class="widget">
    <iframe 
        class="spotify-iframe"
        src="https://open.spotify.com/embed/playlist/5QV2MHMBENcah6G2WuK09q" 
        frameBorder="0" 
        allowfullscreen="" 
        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
</div>
@endsection