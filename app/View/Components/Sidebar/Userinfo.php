<?php

namespace App\View\Components\Sidebar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Userinfo extends Component
{
    /**
     * Create a new component instance.
     */
    public string $image;
    public string $name;
    public string $role;
    public function __construct()
    {
        $this->image = asset('assets/images/placeholder.jpg');
        $this->name = "Arif Muntaha";
        $this->role = "Administrator";
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar.userinfo');
    }
}
