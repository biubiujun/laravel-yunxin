<?php

namespace Biubiujun\Yunxin\VOD;

use Biubiujun\Yunxin\VOD;
use Biubiujun\Yunxin\VOD\Parameters\EncryptParameters;

class Encrypt extends VOD
{
    use EncryptParameters;

    /**
     * 创建加密视频
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function create()
    {
        return $this->request('app/vod/encrypt/create');
    }

    /**
     * 更新加密视频
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function update()
    {
        $this->request('app/vod/encrypt/update');

        return true;
    }

    /**
     * 获取加密视频信息
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function getInfo()
    {
        return $this->request('app/vod/encrypt/getInfo');
    }

    /**
     * 删除加密视频
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function delete()
    {
        $this->request('app/vod/encrypt/delete');

        return true;
    }

    /**
     * 获取传输令牌
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function getToken()
    {
        return $this->request('app/vod/encrypt/getToken');
    }
}
