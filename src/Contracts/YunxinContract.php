<?php

namespace Biubiujun\Yunxin\Contracts;

interface YunxinContract
{
    /**
     * @return void
     */
    public function setBaseUri(): void;

    /**
     * @param string $uri
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function request(string $uri): array;
}
