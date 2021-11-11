<div class="full-screen-video {{ $fullHeight ? 'full-height' : '' }}">
    <video autoplay loop muted playsinline preload="true" poster="{{ $poster }}">
        <source src="{{ $video }}" type="video/mp4">
        <img src="{{ $poster }}" />
    </video>
</div>