<?php

namespace Biubiujun\Yunxin\IM\Parameters;

trait FriendParameters
{
    /**
     * @param string $accId
     * @return \Biubiujun\Yunxin\IM\Friend
     */
    public function setAccId(string $accId)
    {
        return $this->setParameter('accid', $accId);
    }

    /**
     * @param string $fAccId
     * @return \Biubiujun\Yunxin\IM\Friend
     */
    public function setFAccId(string $fAccId)
    {
        return $this->setParameter('faccid', $fAccId);
    }

    /**
     * @param int $type
     * @return \Biubiujun\Yunxin\IM\Friend
     */
    public function setType(int $type)
    {
        return $this->setParameter('type', $type);
    }

    /**
     * @param string $msg
     * @return \Biubiujun\Yunxin\IM\Friend
     */
    public function setMsg(string $msg)
    {
        return $this->setParameter('msg', $msg);
    }

    /**
     * @param string $alias
     * @return \Biubiujun\Yunxin\IM\Friend
     */
    public function setAlias(string $alias)
    {
        return $this->setParameter('alias', $alias);
    }

    /**
     * @param string $ex
     * @return \Biubiujun\Yunxin\IM\Friend
     */
    public function ex(string $ex)
    {
        return $this->setParameter('ex', $ex);
    }
}
