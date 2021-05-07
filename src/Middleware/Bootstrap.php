<?php

namespace DanSketic\Backport\Middleware;

use DanSketic\Backport\Backport;
use DanSketic\Backport\Form;
use DanSketic\Backport\Settings;
use DanSketic\Backport\Grid;
use Illuminate\Http\Request;

class Bootstrap
{
    public function handle(Request $request, \Closure $next)
    {
        Form::registerBuiltinFields();

        Settings::registerBuiltinFields();

        Grid::registerColumnDisplayer();

        if (file_exists($bootstrap = admin_path('bootstrap.php'))) {
            require $bootstrap;
        }

        if (!empty(Backport::$booting)) {
            foreach (Backport::$booting as $callable) {
                call_user_func($callable);
            }
        }

        $this->injectFormAssets();

        if (!empty(Backport::$booted)) {
            foreach (Backport::$booted as $callable) {
                call_user_func($callable);
            }
        }

        return $next($request);
    }

    /**
     * Inject assets of all form fields.
     */
    protected function injectFormAssets()
    {
        $assets = Form::collectFieldAssets();

        Backport::css($assets['css']);
        Backport::js($assets['js']);
    }
}
