<div class="group relative flex shrink-0 gap-x-3 overflow-hidden">
    @for ($i = 0; $i < 2; $i++)
        <div
            {{ $i > 0 ? 'aria-hidden=true' : null }}
            @class([
                'flex min-w-full shrink-0 animate-marquee items-center justify-around',
                'group-hover:[animation-play-state:paused]' => $pauseOnHover,
                'group-hover:[-webkit-text-stroke:inherit] group-hover:[-webkit-text-stroke-width:1px] group-hover:[-webkit-text-fill-color:transparent]' => $strokeOnHover,
            ])
        >
            {{ $slot }}
        </div>
    @endfor
</div>
