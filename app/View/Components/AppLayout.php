<?php

namespace App\View\Components;

use Illuminate\View\View;
use Illuminate\View\Component;

class AppLayout extends Component
{
    public function __construct(
        public bool $includeProgressBar = false,
        public bool $includeNavigation = true,
    ) {
    }

    public function render(): View
    {
        return view('layouts.app');
    }
}
