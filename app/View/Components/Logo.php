<?php

namespace App\View\Components;

use Illuminate\View\View;
use Illuminate\View\Component;

class Logo extends Component
{
    public function __construct(
        public string $fill = 'none',
        public string $stroke = 'none',
        public bool $useHover = false,
        public string $color = 'black',
    ) {
    }

    public function colorClass()
    {
        $weight =  $this->color !== 'black' ? '-900' : '';

        return implode(
            ' ',
            [
                "text-{$this->color}{$weight}",
                $this->useHover
                    ? "hover:stroke-{$this->color}{$weight}"
                    : ''
            ]
        );
    }

    public function render(): View
    {
        return view('components.logo');
    }
}
