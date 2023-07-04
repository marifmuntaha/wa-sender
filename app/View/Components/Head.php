<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Head extends Component
{
    /**
     * Create a new component instance.
     */
    public string $title;
    public function __construct($page)
    {
        if ($page != null) {
            $this->title = $page ." - ". config('app.name');
        }
        else {
            $this->title = config('app.name');
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.head');
    }
}
