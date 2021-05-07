<?php

namespace DanSketic\Backport\Grid\Concerns;

use DanSketic\Backport\Backport;

trait CanFixHeader
{
    public function fixHeader()
    {
        Backport::style(
            <<<'STYLE'
.wrapper, .grid-box .box-body {
    overflow: visible;
}

.grid-table {
    position: relative;
    border-collapse: separate;
}

.grid-table thead tr:first-child th {
    background: white;
    position: sticky;
    top: 0;
    z-index: 1;
}
STYLE
        );
    }
}
