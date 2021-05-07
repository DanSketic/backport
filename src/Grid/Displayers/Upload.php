<?php

namespace DanSketic\Backport\Grid\Displayers;

use DanSketic\Backport\Backport;

class Upload extends AbstractDisplayer
{
    public function display($multiple = false)
    {
        return Backport::component('backport::grid.inline-edit.upload', [
            'key'      => $this->getKey(),
            'name'     => $this->getPayloadName(),
            'value'    => $this->getValue(),
            'target'   => "inline-upload-{$this->getKey()}",
            'resource' => $this->getResource(),
            'multiple' => $multiple,
        ]);
    }
}
