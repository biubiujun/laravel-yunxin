<?php

namespace Biubiujun\Yunxin;

use Symfony\Component\HttpFoundation\ParameterBag;

abstract class IM extends Yunxin
{
    /**
     * @return void
     */
    public function setBaseUri(): void
    {
        $this->baseUri = 'https://api.netease.im/nimserver/';
    }

    /**
     * @param string $uri
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function request(string $uri): array
    {
        return $this->httpClient->request($uri, ['form_params' => $this->getParameters()]);
    }
}
