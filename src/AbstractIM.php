<?php

namespace Biubiujun\Yunxin;

use Biubiujun\Yunxin\HttpClient;
use Symfony\Component\HttpFoundation\ParameterBag;

abstract class AbstractIM
{
    const ALPHABET = 'abcdefghijklmnopqrstuvwxyz1234567890';

    /**
     * @var string
     */
    protected $baseUri = 'https://api.netease.im/nimserver/';

    /**
     * @var \Biubiujun\Yunxin\HttpClient
     */
    protected $httpClient;

    /**
     * @var \Illuminate\Config\Repository
     */
    protected $config;

    /**
     * @var \Symfony\Component\HttpFoundation\ParameterBag
     */
    protected $parameters;

    /**
     * @param \Illuminate\Config\Repository $config
     */
    public function __construct($config)
    {
        $this->httpClient = new HttpClient(
            $config->get('yunxin.app_key'),
            $config->get('yunxin.app_secret'),
            $this->baseUri
        );
        $this->config = $config;

        $this->parameters = new ParameterBag;
    }

    /**
     * @param string $uri
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function request(string $uri): array
    {
        return $this->httpClient->request($uri, ['form_params' => array_filter($this->getParameters())]);
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters->all();
    }

    /**
     * @param string $key
     * @return mixed
     */
    protected function getParameter(string $key)
    {
        return $this->parameters->get($key);
    }

    /**
     * @param string $key
     * @param $value
     * @return $this
     */
    public function setParameter(string $key, $value)
    {
        $this->parameters->set($key, $value);

        return $this;
    }
}
