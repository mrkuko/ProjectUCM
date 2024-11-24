<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Error extends Component
{
    public $title, $code, $message;
    /**
     * Create a new component instance.
     */
    public function __construct($title = null, $code = null, $message = null)
    {
        $this->title = $title;
        $this->code = $code;
        $this->message = $message;
    }
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.error404');
    }
}
