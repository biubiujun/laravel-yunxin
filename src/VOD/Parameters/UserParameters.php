<?php

namespace Biubiujun\Yunxin\VOD\Parameters;

trait UserParameters
{
    /**
     * @param string $accId
     * @return \Biubiujun\Yunxin\VOD\User
     */
    public function setAccId(string $accId)
    {
        return $this->setParameter('accid', $accId);
    }

    /**
     * @param string $name
     * @return \Biubiujun\Yunxin\VOD\User
     */
    public function setName(string $name)
    {
        return $this->setParameter('name', $name);
    }

    /**
     * @param int $type
     * @return \Biubiujun\Yunxin\VOD\User
     */
    public function setType(int $type)
    {
        return $this->setParameter('type', $type);
    }

    /**
     * @param string $props
     * @return \Biubiujun\Yunxin\VOD\User
     */
    public function setProps(string $props)
    {
        return $this->setParameter('props', json_encode($props));
    }

    /**
     * @param string $token
     * @return \Biubiujun\Yunxin\VOD\User
     */
    public function setToken(string $token)
    {
        return $this->setParameter('token', $token);
    }
}
