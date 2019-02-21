<?php

namespace Biubiujun\Yunxin\IM\Parameters;

trait MsgParameters
{
    /**
     * @param string $from
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setFrom(string $from)
    {
        return $this->setParameter('from', $from);
    }

    /**
     * @param int $ope
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setOpe(int $ope)
    {
        return $this->setParameter('ope', $ope);
    }

    /**
     * @param string $to
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setTo(string $to)
    {
        return $this->setParameter('to', $to);
    }

    /**
     * @param int $type
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setType(int $type)
    {
        return $this->setParameter('type', $type);
    }

    /**
     * @param array $body
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setBody(array $body)
    {
        return $this->setParameter('body', json_encode($body));
    }

    /**
     * @param string $antispam
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setAntispam(string $antispam)
    {
        return $this->setParameter('antispam', bool2string($antispam));
    }

    /**
     * @param array $antispamCustom
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setAntispamCustom(array $antispamCustom)
    {
        return $this->setParameter('antispam', json_encode($antispamCustom));
    }

    /**
     * @param array $option
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setOption(array $option)
    {
        return $this->setParameter('option', json_encode($option));
    }

    /**
     * @param string $pushContent
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setPushContent(string $pushContent)
    {
        return $this->setParameter('push_content', $pushContent);
    }

    /**
     * @param array $payload
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setPayload(array $payload)
    {
        return $this->setParameter('payload', json_encode($payload));
    }

    /**
     * @param string $ext
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setExt(string $ext)
    {
        return $this->setParameter('ext', $ext);
    }

    /**
     * @param array $forcePushList
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setForcePushList(array $forcePushList)
    {
        return $this->setParameter('forcepushlist', json_encode($forcePushList));
    }

    /**
     * @param string $forcePushContent
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setForcePushContent(string $forcePushContent)
    {
        return $this->setParameter('forcepushcontent', $forcePushContent);
    }

    /**
     * @param string $forcePushAll
     * @return \Biubiujun\Yunxin\IM\Msg
     */
    public function setForcePushAll(string $forcePushAll)
    {
        return $this->setParameter('forcepushall', bool2string($forcePushAll));
    }
}
