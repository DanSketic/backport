<?php

namespace DanSketic\Backport\Grid\Filter;

class StartsWith extends Like
{
    protected $exprFormat = '{value}%';
}
