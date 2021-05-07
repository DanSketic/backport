<?php

namespace DanSketic\Backport\Grid\Actions;

use DanSketic\Backport\Actions\RowAction;

class Edit extends RowAction
{
    /**
     * @return array|null|string
     */
    public function name()
    {
        return __('backport.edit');
    }

    /**
     * @return string
     */
    public function href()
    {
        return "{$this->getResource()}/{$this->getKey()}/edit";
    }
}
