<?php

namespace Biubiujun\Yunxin\VOD;

use Biubiujun\Yunxin\VOD;
use Biubiujun\Yunxin\VOD\Parameters\TranscodeParameters;

class Transcode extends VOD
{
    use TranscodeParameters;

    /**
     * 视频文件转码
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function resetMulti()
    {
        return $this->request('app/vod/transcode/resetmulti');
    }

    /**
     * 设置转码回调地址
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function setCallback()
    {
        return $this->request('app/vod/transcode/setcallback');
    }
}
