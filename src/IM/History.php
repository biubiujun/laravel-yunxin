<?php

namespace Biubiujun\Yunxin\IM;

use Biubiujun\Yunxin\IM;
use Biubiujun\Yunxin\IM\Parameters\HistoryParameters;

class History extends IM
{
    use HistoryParameters;

    /**
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function querySessionMsg(): array
    {
        $response = $this->request('history/querySessionMsg.action');

        return $response;
    }
}
