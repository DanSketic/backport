<?php

namespace DanSketic\Backport\Traits;

use DanSketic\Backport\Form;
use DanSketic\Backport\Settings;
use DanSketic\Backport\Grid;
use DanSketic\Backport\Tree;

trait AdminBuilder
{
    /**
     * @param \Closure $callback
     *
     * @return Grid
     */
    public static function grid(\Closure $callback)
    {
        return new Grid(new static(), $callback);
    }

    /**
     * @param \Closure $callback
     *
     * @return Form
     */
    public static function form(\Closure $callback)
    {
        Form::registerBuiltinFields();

        return new Form(new static(), $callback);
    }

    /**
     * @param \Closure $callback
     *
     * @return Settings
     */
    public static function settings(\Closure $callback)
    {
        Settings::registerBuiltinFields();

        return new Settings(new static(), $callback);
    }

    /**
     * @param \Closure $callback
     *
     * @return Tree
     */
    public static function tree(\Closure $callback = null)
    {
        return new Tree(new static(), $callback);
    }
}
