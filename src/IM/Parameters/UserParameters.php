<?php

namespace Biubiujun\Yunxin\IM\Parameters;

trait UserParameters
{
    /**
     * @param string $accId
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setAccId(string $accId)
    {
        return $this->setParameter('accid', $accId);
    }

    /**
     * @param array $accIds
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setAccIds(array $accIds)
    {
        return $this->setParameter('accids', json_encode($accIds));
    }

    /**
     * @param string $name
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setName(string $name)
    {
        return $this->setParameter('name', $name);
    }

    /**
     * @param string $props
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setProps(string $props)
    {
        return $this->setParameter('props', json_encode($props));
    }

    /**
     * @param string $icon
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setIcon(string $icon)
    {
        return $this->setParameter('icon', $icon);
    }

    /**
     * @param string $token
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setToken(string $token)
    {
        return $this->setParameter('token', $token);
    }

    /**
     * @param string $sign
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setSign(string $sign)
    {
        return $this->setParameter('sign', $sign);
    }

    /**
     * @param string $email
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setEmail(string $email)
    {
        return $this->setParameter('email', $email);
    }

    /**
     * @param string $birth
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setBirth(string $birth)
    {
        return $this->setParameter('birth', $birth);
    }

    /**
     * @param string $mobile
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setMobile(string $mobile)
    {
        return $this->setParameter('mobile', $mobile);
    }

    /**
     * @param int $gender
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setGender(int $gender)
    {
        return $this->setParameter('gender', $gender);
    }

    /**
     * @param string $ex
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setEx(string $ex)
    {
        return $this->setParameter('ex', $ex);
    }

    /**
     * @param string $needKick
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setNeedKick(string $needKick)
    {
        return $this->setParameter('needkick', bool2string($needKick));
    }

    /**
     * @param string $donnopOpen
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setDonnopOpen(string $donnopOpen)
    {
        return $this->setParameter('donnopOpen', bool2string($donnopOpen));
    }

    /**
     * @param string $targetAcc
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setTargetAcc(string $targetAcc)
    {
        return $this->setParameter('targetAcc', $targetAcc);
    }

    /**
     * @param int $relationType
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setRelationType(int $relationType)
    {
        return $this->setParameter('relationType', $relationType);
    }

    /**
     * @param int $value
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setValue(int $value)
    {
        return $this->setParameter('value', $value);
    }
}
