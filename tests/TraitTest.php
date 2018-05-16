<?php

namespace Ariby\Ulid\Tests;

use Ariby\Ulid\Tests\Models\User;

class TraitTest extends BaseTestCase
{
    /**
     * Set-up 等同建構式
     */
    public function setUp()
    {
        parent::setUp();

        // 初始化 User Table，測試需要的假 User 寫入此 Table
        $this->initUserTable();

        // 注入此套件會使用到的 database 相關東西
        $this->injectDatabase();
    }

    public function test_autoCreateUlid()
    {
        $user = new User;
        $user->name = "test";
        /* 未給予值前應該null */
        $this->assertNull($user->id);
        $user->save();
        /* 給予值後應該有Ulid */
        $this->assertNotNull($user->id);
    }
}