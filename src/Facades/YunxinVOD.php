<?php

namespace Biubiujun\Yunxin\Facades;

use Illuminate\Support\Facades\Facade;

class YunxinVOD extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'yunxin.vod';
    }

    /**
     * @return \Biubiujun\Yunxin\IM\User
     */
    public static function user()
    {
        return app('yunxin.vod.user');
    }


}
