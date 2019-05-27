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
     * @return \Biubiujun\Yunxin\VOD\User
     */
    public static function user()
    {
        return app('yunxin.vod.user');
    }

    /**
     * @return \Biubiujun\Yunxin\VOD\Transcode
     */
    public static function transcode()
    {
        return app('yunxin.vod.transcode');
    }

    /**
     * @return \Biubiujun\Yunxin\VOD\Video
     */
    public static function video()
    {
        return app('yunxin.vod.video');
    }

    /**
     * @return \Biubiujun\Yunxin\VOD\Encrypt
     */
    public static function encrypt()
    {
        return app('yunxin.vod.encrypt');
    }
}
