<?php

namespace Biubiujun\Yunxin;

use Biubiujun\Yunxin\Exceptions\HttpException;
use Biubiujun\Yunxin\Exceptions\InvalidResponseException;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;

class HttpClient
{
    protected $appKey;

    protected $appSecret;

    protected $baseUri;

    protected $httpClient;

    private $timeout = 5;

    public function __construct($appKey, $appSecret, $baseUri)
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->baseUri = $baseUri;
    }

    /**
     * @param string $uri
     * @param array $options
     * @param string $method
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function request(string $uri, array $options = [], string $method = 'post'): array
    {
        if (!($this->httpClient instanceof ClientInterface)) {
            $this->httpClient = new Client([
                'base_uri' => $this->baseUri,
                'timeout' => $this->timeout,
            ]);
        }

        $options = array_merge($options, ['headers' => $this->getHeaders()]);
        $response = $this->httpClient->request($method, $uri, $options);

        return $this->handleResponse($response);
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    protected function handleResponse(ResponseInterface $response): array
    {
        if (200 != $response->getStatusCode()) {
            throw new HttpException('Yunxin response status code must be 200: ', $response);
        }

        $content = $response->getBody()->getContents();
        $response = json_decode($content, true, 512, JSON_BIGINT_AS_STRING);

        if (JSON_ERROR_NONE === json_last_error()) {
            if (200 == $response['code']) {
                return $response;
            }

            throw new InvalidResponseException('Yunxin response code must be 200: ' . $response['desc'], $response['code']);
        } else {
            throw new InvalidResponseException('Yunxin response body must be json: ' . $response);
        }
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        $nonce = uniqid();
        $curTime = time();

        return [
            'AppKey' => $this->appKey,
            'Nonce' => $nonce,
            'CurTime' => $curTime,
            'CheckSum' => sha1($this->appSecret . $nonce . $curTime),
        ];
    }
}
