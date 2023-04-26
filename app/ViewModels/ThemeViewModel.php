<?php

namespace App\ViewModels;

use Illuminate\Support\Arr;
use Spatie\ViewModels\ViewModel;

class ThemeViewModel extends ViewModel
{
    public function __construct(public ?string $color = null)
    {
        if (empty($this->color)) {
            $this->color = $this->randomColor();
        }
    }

    public function randomColor(): string
    {
        return Arr::random(config('tailwind.colors'));
    }

    public function textColorClass(): string
    {
        return implode([
            'text-',
            $this->color,
            in_array($this->color, ['black', 'white'])
                ? ''
                : '-900'
        ]);
    }

    public function backgroundColorClass(): string
    {
        return implode([
            'bg-',
            $this->color,
            in_array($this->color, ['black', 'white'])
                ? ''
                : '-900'
        ]);
    }
}
