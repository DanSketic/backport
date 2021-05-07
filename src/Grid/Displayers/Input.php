<?php

namespace DanSketic\Backport\Grid\Displayers;

use DanSketic\Backport\Backport;

class Input extends AbstractDisplayer
{
    public function display($mask = '')
    {
        return Backport::component('backport::grid.inline-edit.input', [
            'key'      => $this->getKey(),
            'value'    => $this->getValue(),
            'display'  => $this->getValue(),
            'name'     => $this->getPayloadName(),
            'resource' => $this->getResource(),
            'trigger'  => "ie-trigger-{$this->getClassName()}",
            'target'   => "ie-template-{$this->getClassName()}",
            'mask'     => $mask,
        ]);
    }
}
