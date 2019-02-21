<?php

namespace Biubiujun\Yunxin\IM;

use Biubiujun\Yunxin\AbstractIM;
use Biubiujun\Yunxin\IM\Parameters\FriendParameters;

class Friend extends AbstractIM
{
    use FriendParameters;

    /**
     * 加好友
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function add()
    {
        $this->request('friend/add.action');

        return true;
    }

    /**
     * 更新好友相关信息
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function update()
    {
        $this->request('friend/update.action');

        return true;
    }

    /**
     * 删除好友
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function delete()
    {
        $this->request('friend/delete.action');

        return true;
    }

    /**
     * 获取好友关系
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function get()
    {
        $response = $this->request('friend/get.action');

        return $response;
    }
}
