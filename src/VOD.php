<?php

namespace Biubiujun\Yunxin;

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
        return $this->httpClient->request($uri, ['json' => array_filter($this->getParameters())]);
    }
}
