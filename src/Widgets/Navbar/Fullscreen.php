<?php

namespace DanSketic\Backport\Widgets\Navbar;

use DanSketic\Backport\Backport;
use Illuminate\Contracts\Support\Renderable;

/**
 * Class FullScreen.
 *
 * @see  https://javascript.ruanyifeng.com/htmlapi/fullscreen.html
 */
class Fullscreen implements Renderable
{
    public function render()
    {
        return Backport::component('backport::components.fullscreen');
    }
}
