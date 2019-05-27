<?php

namespace Biubiujun\Yunxin;

use Biubiujun\Yunxin\Exceptions\InvalidResponseException;
use Symfony\Component\HttpFoundation\ParameterBag;

abstract class VOD extends Yunxin
{
    /**
     * @return void
     */
    public function setBaseUri(): void
    {
        $this->baseUri = 'https://vcloud.163.com/';
    }

    /**
     * @param string $uri
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function request(string $uri): array
    {
        $response = $this->httpClient->request($uri, ['json' => array_filter($this->getParameters())]);

        if (200 == $response['code']) {
            return $response;
        }

        throw new InvalidResponseException('Yunxin response code must be 200: ' . $response['msg'], $response['code']);
    }
}
