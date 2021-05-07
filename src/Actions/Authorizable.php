<?php

namespace DanSketic\Backport\Actions;

use DanSketic\Backport\Facades\Backport;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Action
 */
trait Authorizable
{
    /**
     * @param Model $model
     *
     * @return bool
     */
    public function passesAuthorization($model = null)
    {
        if (method_exists($this, 'authorize')) {
            return $this->authorize(Backport::user(), $model) == true;
        }

        if ($model instanceof Collection) {
            $model = $model->first();
        }

        if ($model && method_exists($model, 'actionAuthorize')) {
            return $model->actionAuthorize(Backport::user(), get_called_class()) == true;
        }

        return true;
    }

    /**
     * @return mixed
     */
    public function failedAuthorization()
    {
        return $this->response()->error(__('backport.deny'))->send();
    }
}
