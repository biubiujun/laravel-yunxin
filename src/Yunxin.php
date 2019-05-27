<?php

namespace Biubiujun\Yunxin;

use Biubiujun\Yunxin\Contracts\YunxinContract;
use Symfony\Component\HttpFoundation\ParameterBag;

abstract class Yunxin implements YunxinContract
{
    const ALPHABET = 'abcdefghijklmnopqrstuvwxyz1234567890';

    /**
     * @var string
     */
    protected $baseUri = '';

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
        $this->setBaseUri();

        $this->httpClient = new HttpClient(
            $config->get('yunxin.app_key'),
            $config->get('yunxin.app_secret'),
            $this->baseUri
        );
        $this->config = $config;

        $this->parameters = new ParameterBag;
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
