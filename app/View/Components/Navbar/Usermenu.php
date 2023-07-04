<?php

namespace App\View\Components\Navbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Usermenu extends Component
{
    /**
     * Create a new component instance.
     */
    public string $image;
    public string $name;
    public function __construct()
    {
        $this->image = asset('assets/images/placeholder.jpg');
        $this->name = "Arif Muntaha";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar.usermenu');
    }
}
