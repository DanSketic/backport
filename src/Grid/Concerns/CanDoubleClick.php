<?php

namespace DanSketic\Backport\Grid\Concerns;

use DanSketic\Backport\Backport;

trait CanDoubleClick
{
    /**
     * Double-click grid row to jump to the edit page.
     *
     * @return $this
     */
    public function enableDblClick()
    {
        $script = <<<SCRIPT
$('body').on('dblclick', 'table#{$this->tableID}>tbody>tr', function(e) {
    var url = "{$this->resource()}/"+$(this).data('key')+"/edit";
    $.backport.redirect(url);
});
SCRIPT;
        Backport::script($script);

        return $this;
    }
}
