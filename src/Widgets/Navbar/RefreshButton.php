<?php

namespace DanSketic\Backport\Widgets\Navbar;

use DanSketic\Backport\Backport;
use Illuminate\Contracts\Support\Renderable;

class RefreshButton implements Renderable
{
    public function render()
    {
        return Backport::component('backport::components.refresh-btn');
    }
}
