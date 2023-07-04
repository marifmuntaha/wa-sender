<?php

namespace App\View\Components\Navbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Brand extends Component
{
    /**
     * Create a new component instance.
     */
    public string $link;
    public string $logo;
    public string $logoIcon;
    public function __construct()
    {
        $this->link = route('member.dashboard');
        $this->logo = asset('assets/images/logo_light.png');
        $this->logoIcon = asset('assets/images/logo_icon_light.png');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar.brand');
    }
}
