<?php

namespace DanSketic\Backport\Grid\Displayers;

use DanSketic\Backport\Backport;

class Datetime extends AbstractDisplayer
{
    public function display($format = '')
    {
        return Backport::component('backport::grid.inline-edit.datetime', [
            'key'      => $this->getKey(),
            'value'    => $this->getValue(),
            'display'  => $this->getValue(),
            'name'     => $this->getPayloadName(),
            'resource' => $this->getResource(),
            'trigger'  => "ie-trigger-{$this->getClassName()}",
            'target'   => "ie-template-{$this->getClassName()}",

            'format'   => $format,
            'locale'   => config('app.locale'),
        ]);
    }
}
