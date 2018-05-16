<?php

namespace Ariby\Ulid;

trait HasUlid
{

    public static function bootHasUlid()
    {
        static::creating(function ($model) {
            if (!$model->id) {
                $model->id = Ulid::generate();
            }
        });

        static::saving(function ($model) {
            $originalUlid = $model->getOriginal('id');
            if ($originalUlid !== $model->id) {
                $model->id = $originalUlid;
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