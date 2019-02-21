<?php

namespace Biubiujun\Yunxin\Facades;

use Illuminate\Support\Facades\Facade;

class YunxinIM extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'yunxin.im';
    }

    /**
     * @return \Biubiujun\Yunxin\IM\User
     */
    public static function user()
    {
        return app('yunxin.im.user');
    }

    /**
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public static function chatRoom()
    {
        return app('yunxin.im.chat_room');
    }
}
