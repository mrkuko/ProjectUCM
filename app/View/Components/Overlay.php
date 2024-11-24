<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Overlay extends Component
{
    public $header, $headerAttributes;
    /**
     * Create a new component instance.
     */
    public function __construct($header = null, $headerAttributes = null)
    {
        $this->header = $header;
        $this->headerAttributes = $headerAttributes;
    }
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.overlay');
    }
}
