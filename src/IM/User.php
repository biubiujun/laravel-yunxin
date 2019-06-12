<?php

namespace Biubiujun\Yunxin\IM;

use Biubiujun\Yunxin\IM;
use Biubiujun\Yunxin\IM\Parameters\UserParameters;

class User extends IM
{
    use UserParameters;

    /**
     * 创建网易云通信ID
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function create(): array
    {
        return $this->request('user/create.action');
    }

    /**
     * 网易云通信ID更新
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function update(): array
    {
        return $this->request('user/update.action');
    }

    /**
     * 更新并获取新token
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function refreshToken(): array
    {
        return $this->request('user/refreshToken.action');
    }

    /**
     * 更新用户名片
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function updateUinfo(): array
    {
        return $this->request('user/updateUinfo.action');
    }

    /**
     * 获取用户名片
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function getUinfos(): array
    {
        return $this->request('user/getUinfos.action');
    }

    /**
     * 封禁网易云通信ID
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function block(): array
    {
        return $this->request('user/block.action');
    }

    /**
     * 解禁网易云通信ID
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function unblock(): array
    {
        return $this->request('user/unblock.action');
    }

    /**
     * 设置桌面端在线时，移动端是否需要推送
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function setDonnop(): array
    {
        return $this->request('user/setDonnop.action');
    }

    /**
     * 设置黑名单/静音
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function setSpecialRelation(): array
    {
        return $this->request('user/setSpecialRelation.action');
    }

    /**
     * 查看指定用户的黑名单和静音列表
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function listBlackAndMuteList(): array
    {
        return $this->request('user/listBlackAndMuteList.action');
    }
}
