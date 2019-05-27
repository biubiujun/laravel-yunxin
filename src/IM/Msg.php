<?php

namespace Biubiujun\Yunxin\IM;

use Biubiujun\Yunxin\IM;
use Biubiujun\Yunxin\IM\Parameters\MsgParameters;

class Msg extends IM
{
    use MsgParameters;

    /**
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function sendMsg(): bool
    {
        $this->request('msg/sendMsg.action');

        return true;
    }
}
