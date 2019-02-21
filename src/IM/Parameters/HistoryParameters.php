<?php

namespace Biubiujun\Yunxin\IM\Parameters;

trait HistoryParameters
{
    /**
     * @param string $from
     * @return \Biubiujun\Yunxin\IM\History
     */
    public function setFrom(string $from)
    {
        return $this->setParameter('from', $from);
    }

    /**
     * @param string $to
     * @return \Biubiujun\Yunxin\IM\History
     */
    public function setTo(string $to)
    {
        return $this->setParameter('to', $to);
    }

    /**
     * @param string $beginTime
     * @return \Biubiujun\Yunxin\IM\History
     */
    public function setBeginTime(string $beginTime)
    {
        return $this->setParameter('begintime', $beginTime);
    }

    /**
     * @param string $endTime
     * @return \Biubiujun\Yunxin\IM\History
     */
    public function setEndTime(string $endTime)
    {
        return $this->setParameter('endtime', $endTime);
    }

    /**
     * @param string $limit
     * @return \Biubiujun\Yunxin\IM\History
     */
    public function setLimit(string $limit)
    {
        return $this->setParameter('limit', $limit);
    }

    /**
     * @param string $reverse
     * @return \Biubiujun\Yunxin\IM\History
     */
    public function setReverse(string $reverse)
    {
        return $this->setParameter('reverse', $reverse);
    }
}
