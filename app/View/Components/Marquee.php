<?php

namespace App\View\Components;

use Illuminate\View\View;
use Illuminate\View\Component;

class Marquee extends Component
{
    public function __construct(
        public ?bool $pauseOnHover = true,
        public ?bool $strokeOnHover = true
    ) {
    }

    public function render(): View
    {
        return view('components.marquee');
    }
}
