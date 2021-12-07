<?php
    $pageKey = 'about';
?>

@extends('templates.split-block', 
    [
        'pageKey' => $pageKey,
        'layout' => '60-40',
        'topPart' => 'part2',
        'fullHeight' => true
    ]
)

@section($pageKey.'-part1')
<div class="text" id="about" uk-scrollspy="cls:uk-animation-slide-left">
    <div class="title text-bold">Youri van der Starre</div>
    <div class="subtitle text-bold">Hij lacht. Hij maakt. Hij geniet.</div>
    <div class="body">
    Youri van der Starre is een online contentproducent gespecialiseerd in het allround leiden en maken van video- en audiocontent, fotografie en 2D animatie. Door de jarenlange ervaring in het maken van social content en bedrijfsfilm tilt hij zijn producties tot een hoger niveau, met treffende inhoud en een vlijmscherp randje.
    <br><br>
    Sinds jaar en dag is Youri gefascineerd geweest met beeld en geluid. Deze fascinatie heeft hij kunnen voortzetten tot een diepgewortelde passie die voortvloeit in het werk wat hij samen met u creëert.
    </div>
</div>
@endsection

@section($pageKey.'-part2')
<div class="image">
    <img src="assets/images/about.JPG" alt="Over Youri">
</div>
@endsection