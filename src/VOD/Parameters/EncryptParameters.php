<?php

namespace Biubiujun\Yunxin\VOD\Parameters;

trait EncryptParameters
{
    /**
     * @param int $vid
     * @return \Biubiujun\Yunxin\VOD\Encrypt
     */
    public function setVid(int $vid)
    {
        return $this->setParameter('vid', $vid);
    }

    /**
     * @param int $style
     * @return \Biubiujun\Yunxin\VOD\Encrypt
     */
    public function setStyle(int $style)
    {
        return $this->setParameter('style', $style);
    }

    /**
     * @param int $algo
     * @return \Biubiujun\Yunxin\VOD\Encrypt
     */
    public function setAlgo(int $algo)
    {
        return $this->setParameter('algo', $algo);
    }

    /**
     * @param string $encryptId
     * @return \Biubiujun\Yunxin\VOD\Encrypt
     */
    public function setEncryptId(string $encryptId)
    {
        return $this->setParameter('encryptId', $encryptId);
    }

    /**
     * @param int $expireTime
     * @return \Biubiujun\Yunxin\VOD\Encrypt
     */
    public function expireTime(int $expireTime)
    {
        return $this->setParameter('expireTime', $expireTime);
    }
}
