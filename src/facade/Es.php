<?php

namespace think\facade;

use think\Facade;

/**
 * Class Es
 * @package think\facade
 * @mixin \think\facade\Es
 */
class Es extends Facade
{
    protected static function getFacadeClass()
    {
        return \think\Es::class;
    }
}
