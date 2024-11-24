<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WelcomeLayout extends Component
{
    public $header;
    /**
     * Create a new component instance.
     */
    public function __construct($header = null)
    {
        $this->header = $header;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.welcome-layout');
    }
}
