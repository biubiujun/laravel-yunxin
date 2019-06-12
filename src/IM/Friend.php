<?php

namespace Biubiujun\Yunxin\IM;

use Biubiujun\Yunxin\IM;
use Biubiujun\Yunxin\IM\Parameters\FriendParameters;

class Friend extends IM
{
    use FriendParameters;

    /**
     * 加好友
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function add(): array
    {
        return $this->request('friend/add.action');
    }

    /**
     * 更新好友相关信息
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function update(): array
    {
        return $this->request('friend/update.action');
    }

    /**
     * 删除好友
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function delete(): array
    {
        return $this->request('friend/delete.action');
    }

    /**
     * 获取好友关系
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function get(): array
    {
        return $this->request('friend/get.action');
    }
}
