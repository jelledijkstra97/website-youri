<?php
    $allowedLayouts = ['50-50', '60-40', '40-60', '70-30', '30-70'];
    if (!in_array($layout, $allowedLayouts)) {
        throw new Exception("Layout $layout not supported");
    }
?>

<div 
    {{ isset($flipsHeader) ? 'flipsHeader' : '' }}
    id="{{ isset($containerID) ? $containerID : $pageKey }}" 
    class="split-block {{ 'split-block-'.$layout }} {{ isset($containerClass) ? $containerClass : $pageKey }} {{ isset($fullHeight) && $fullHeight ? 'full-height' : '' }}">
    <div class="limit-width-container">
        <div class="part1 {{ isset($topPart) && $topPart === 'part1' ? 'top' : '' }}">
            <div class="container {{ isset($part1ContainerClass) ? $part1ContainerClass : '' }}">
                @yield($pageKey.'-part1')
            </div>
        </div>

        <div class="part2 {{ isset($topPart) && $topPart === 'part2' ? 'top' : '' }}">
        <div class="container {{ isset($part2ContainerClass) ? $part2ContainerClass : '' }}">
                @yield($pageKey.'-part2')
            </div>
        </div>
    </div>
</div>