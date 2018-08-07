<?php

namespace Ariby\Ulid;

trait HasUlid
{

    public static function bootHasUlid()
    {
        static::creating(function ($model) {
            if (!isset($model->attributes[$model->getKeyName()])) {
                $model->attributes[$model->getKeyName()] = (string) Ulid::generate();
            }
        });
    }

    /*
     * This function is used internally by Eloquent models to test if the model has auto increment value
     * @returns bool Always false
     */
    public function getIncrementing()
    {
        return false;
    }

}