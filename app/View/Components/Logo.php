<?php

namespace App\View\Components;

use Illuminate\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Logo extends Component
{
    public function __construct(
        public string $fill = 'none',
        public string $stroke = 'none',
        public bool $useRandomColor = false,
        public bool $useHover = false
    ) {
    }

    public function color()
    {
        $color = $this->useRandomColor
            ? Arr::random(config('tailwind.colors'))
            : 'black';

        return implode(
            ' ',
            [
                "text-{$color}-900",
                $this->useHover
                    ? "hover:stroke-{$color}-900"
                    : ''
            ]
        );
    }

    public function render(): View
    {
        return view('components.logo');
    }
}
