<?php

namespace DanSketic\Backport\Grid\Filter;

class EndsWith extends Like
{
    protected $exprFormat = '%{value}';
}
