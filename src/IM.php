<?php

namespace Biubiujun\Yunxin;

use Biubiujun\Yunxin\Exceptions\InvalidResponseException;
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
        $response = $this->httpClient->request($uri, ['form_params' => array_filter($this->getParameters())]);

        if (200 == $response['code']) {
            return $response;
        }

        throw new InvalidResponseException('Yunxin response code must be 200: ' . $response['desc'], $response['code']);
    }
}
