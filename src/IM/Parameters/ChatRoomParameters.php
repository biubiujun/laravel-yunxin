<?php

namespace Biubiujun\Yunxin\IM\Parameters;

trait ChatRoomParameters
{
    /**
     * @param string $creator
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setCreator(string $creator)
    {
        return $this->setParameter('creator', $creator);
    }

    /**
     * @param string $name
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setName(string $name)
    {
        return $this->setParameter('name', $name);
    }

    /**
     * @param string $announcement
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setAnnouncement(string $announcement)
    {
        return $this->setParameter('announcement', $announcement);
    }

    /**
     * @param string $broadcastUrl
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setBroadcastUrl(string $broadcastUrl)
    {
        return $this->setParameter('broadcasturl', $broadcastUrl);
    }

    /**
     * @param string $ext
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setExt(string $ext)
    {
        return $this->setParameter('ext', $ext);
    }

    /**
     * @param int $roomId
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setRoomId(int $roomId)
    {
        return $this->setParameter('roomid', $roomId);
    }

    /**
     * @param string $needOnlineUserCount
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setNeedOnlineUserCount(string $needOnlineUserCount)
    {
        return $this->setParameter('needOnlineUserCount', bool2string($needOnlineUserCount));
    }

    /**
     * @param string $needNotify
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setNeedNotify(string $needNotify)
    {
        return $this->setParameter('needNotify', $needNotify);
    }

    /**
     * @param string $notifyExt
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setNotifyExt(string $notifyExt)
    {
        return $this->setParameter('notifyExt', $notifyExt);
    }

    /**
     * @param string $operator
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setOperator(string $operator)
    {
        return $this->setParameter('operator', $operator);
    }

    /**
     * @param string $valid
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setValid(string $valid)
    {
        return $this->setParameter('valid', bool2string($valid));
    }

    /**
     * @param string $target
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setTarget(string $target)
    {
        return $this->setParameter('target', $target);
    }

    /**
     * @param int $opt
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setOpt(int $opt)
    {
        return $this->setParameter('opt', $opt);
    }

    /**
     * @param string $optValue
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setOptValue(string $optValue)
    {
        return $this->setParameter('optvalue', bool2string($optValue));
    }

    /**
     * @param string $accId
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setAccId(string $accId)
    {
        return $this->setParameter('accid', $accId);
    }

    /**
     * @param int $clientType
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setClientType(int $clientType)
    {
        return $this->setParameter('clienttype', $clientType);
    }

    /**
     * @param string $msgId
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setMsgId(string $msgId)
    {
        return $this->setParameter('msgId', $msgId);
    }

    /**
     * @param string $fromAccId
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setFromAccId(string $fromAccId)
    {
        return $this->setParameter('fromAccid', $fromAccId);
    }

    /**
     * @param int $msgType
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setMsgType(int $msgType)
    {
        return $this->setParameter('msgType', $msgType);
    }

    /**
     * @param int $resendFlag
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setResendFlag(int $resendFlag)
    {
        return $this->setParameter('resendFlag', $resendFlag);
    }

    /**
     * @param string $attach
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setAttach(string $attach)
    {
        return $this->setParameter('attach', $attach);
    }

    /**
     * @param string $antispam
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setAntispam(string $antispam)
    {
        return $this->setParameter('antispam', bool2string($antispam));
    }

    /**
     * @param array $antispamCustom
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setAntispamCustom(array $antispamCustom)
    {
        return $this->setParameter('antispam', json_encode($antispamCustom));
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
     * @param array $roleExt
     * @return \Biubiujun\Yunxin\IM\User
     */
    public function setRoleExt(array $roleExt)
    {
        return $this->setParameter('roleExt', json_encode($roleExt));
    }

    /**
     * @param int $muteDuration
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setMuteDuration(int $muteDuration)
    {
        return $this->setParameter('muteDuration', $muteDuration);
    }

    /**
     * @param string $key
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setKey(string $key)
    {
        return $this->setParameter('key', $key);
    }

    /**
     * @param string $value
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setValue(string $value)
    {
        return $this->setParameter('value', $value);
    }

    /**
     * @param int $sizeLimit
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setSizeLimit(int $sizeLimit)
    {
        return $this->setParameter('sizeLimit', $sizeLimit);
    }

    /**
     * @param string $mute
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setMute(string $mute)
    {
        return $this->setParameter('mute', bool2string($mute));
    }

    /**
     * @param int $topn
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setTopn(int $topn)
    {
        return $this->setParameter('topn', $topn);
    }

    /**
     * @param string $period
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setPeriod(string $period)
    {
        return $this->setParameter('period', $period);
    }

    /**
     * @param string $orderBy
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setOrderBy(string $orderBy)
    {
        return $this->setParameter('orderby', $orderBy);
    }

    /**
     * @param int $type
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setType(int $type)
    {
        return $this->setParameter('type', $type);
    }

    /**
     * @param string $endTime
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setEndTime(string $endTime)
    {
        return $this->setParameter('endtime', $endTime);
    }

    /**
     * @param string $limit
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setLimit(string $limit)
    {
        return $this->setParameter('limit', $limit);
    }

    /**
     * @param string $nick
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setNick(string $nick)
    {
        return $this->setParameter('nick', $nick);
    }

    /**
     * @param string $avator
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setAvator(string $avator)
    {
        return $this->setParameter('avator', $avator);
    }

    /**
     * @param int $level
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setLevel(int $level)
    {
        return $this->setParameter('level', $level);
    }

    /**
     * @param string $onlineStat
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setOnlineStat(string $onlineStat)
    {
        return $this->setParameter('onlineStat', bool2string($onlineStat));
    }

    /**
     * @param int $enterTime
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setEnterTime(int $enterTime)
    {
        return $this->setParameter('enterTime', $enterTime);
    }

    /**
     * @param string $blackListed
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setBlackListed(string $blackListed)
    {
        return $this->setParameter('blacklisted', bool2string($blackListed));
    }

    /**
     * @param string $muted
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setMuted(string $muted)
    {
        return $this->setParameter('muted', bool2string($muted));
    }

    /**
     * @param string $tempMuted
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setTempMuted(string $tempMuted)
    {
        return $this->setParameter('tempMuted', bool2string($tempMuted));
    }

    /**
     * @param int $tempMuteTtl
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setTempMuteTtl(int $tempMuteTtl)
    {
        return $this->setParameter('tempMuteTtl', $tempMuteTtl);
    }

    /**
     * @param string $isRobot
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setIsRobot(string $isRobot)
    {
        return $this->setParameter('isRobot', bool2string($isRobot));
    }

    /**
     * @param int $robotExpirAt
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setRobotExpirAt(int $robotExpirAt)
    {
        return $this->setParameter('robotExpirAt', $robotExpirAt);
    }

    /**
     * @param string $save
     * @return \Biubiujun\Yunxin\IM\ChatRoom
     */
    public function setSave(string $save)
    {
        return $this->setParameter('save', $save);
    }
}
