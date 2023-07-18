<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminLayout extends Component
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
    /* geriye değer döndürme  view|Clourse|string]   */
    public function render(): View|Closure|string
    {
        return view('layout.admin');
    }
}
