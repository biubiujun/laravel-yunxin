<?php

namespace Biubiujun\Yunxin\IM;

use Biubiujun\Yunxin\AbstractIM;
use Biubiujun\Yunxin\IM\Parameters\UserParameters;

class User extends AbstractIM
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
        $response = $this->request('user/create.action');

        return $response['info'];
    }

    /**
     * 网易云通信ID更新
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function update(): bool
    {
        $this->request('user/update.action');

        return true;
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
        $response = $this->request('user/refreshToken.action');

        return $response['info'];
    }

    /**
     * 更新用户名片
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function updateUinfo(): bool
    {
        $this->request('user/updateUinfo.action');

        return true;
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
        $response = $this->request('user/getUinfos.action');

        return $response['uinfos'];
    }

    /**
     * 封禁网易云通信ID
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function block(): bool
    {
        $this->request('user/block.action');

        return true;
    }

    /**
     * 解禁网易云通信ID
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function unblock(): bool
    {
        $this->request('user/unblock.action');

        return true;
    }

    /**
     * 设置桌面端在线时，移动端是否需要推送
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function setDonnop(): bool
    {
        $this->request('user/setDonnop.action');

        return true;
    }

    /**
     * 设置黑名单/静音
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function setSpecialRelation(): bool
    {
        $this->request('user/setSpecialRelation.action');

        return true;
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
        $response = $this->request('user/listBlackAndMuteList.action');

        return $response;
    }
}
