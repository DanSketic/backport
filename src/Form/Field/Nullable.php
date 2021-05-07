<?php

namespace DanSketic\Backport\Form\Field;

use DanSketic\Backport\Form\Field;

class Nullable extends Field
{
    public function __construct()
    {
    }

    public function __call($method, $parameters)
    {
        return $this;
    }
}
