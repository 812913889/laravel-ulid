<?php

namespace Ariby\Ulid\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Ariby\Ulid\HasUlid;

/**
 * 測試用使用者 Model
 *
 * @property String $id Ulid
 * @property String $name
 */
class User extends Model
{
    use HasUlid;

    public function __construct()
    {
        parent::__construct();
    }

}