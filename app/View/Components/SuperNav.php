<?php

namespace App\View\Components;

use Closure;
//use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\View\View;


class SuperNav extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('layouts.navigation');
    }
}
