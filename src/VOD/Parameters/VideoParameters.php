<?php

namespace Biubiujun\Yunxin\VOD\Parameters;

trait VideoParameters
{
    /**
     * @param int $vid
     * @return \Biubiujun\Yunxin\VOD\Video
     */
    public function setVid(int $vid)
    {
        return $this->setParameter('vid', $vid);
    }

    /**
     * @param array $vids
     * @return \Biubiujun\Yunxin\VOD\Transcode
     */
    public function setVids(array $vids)
    {
        return $this->setParameter('vids', json_encode($vids));
    }

    /**
     * @param string $videoName
     * @return \Biubiujun\Yunxin\VOD\Video
     */
    public function setVideoName(string $videoName)
    {
        return $this->setParameter('videoName', $videoName);
    }

    /**
     * @param $typeId
     * @return \Biubiujun\Yunxin\VOD\Video
     */
    public function setTypeId(int $typeId)
    {
        return $this->setParameter('typeId', $typeId);
    }

    /**
     * @param string $description
     * @return \Biubiujun\Yunxin\VOD\Video
     */
    public function setDescription(string $description)
    {
        return $this->setParameter('description', $description);
    }

    /**
     * @param int $style
     * @return \Biubiujun\Yunxin\VOD\Video
     */
    public function setStyle(int $style)
    {
        return $this->setParameter('style', $style);
    }

    /**
     * @param int $currentPage
     * @return \Biubiujun\Yunxin\VOD\Video
     */
    public function setCurrentPage(int $currentPage)
    {
        return $this->setParameter('currentPage', $currentPage);
    }

    /**
     * @param int $pageSize
     * @return \Biubiujun\Yunxin\VOD\Video
     */
    public function setPageSize(int $pageSize)
    {
        return $this->setParameter('pageSize', $pageSize);
    }

    /**
     * @param int $status
     * @return \Biubiujun\Yunxin\VOD\Video
     */
    public function setStatus(int $status)
    {
        return $this->setParameter('status', $status);
    }

    /**
     * @param int $type
     * @return \Biubiujun\Yunxin\VOD\Video
     */
    public function setType(int $type)
    {
        return $this->setParameter('type', $type);
    }

    /**
     * @param int $sortStr
     * @return \Biubiujun\Yunxin\VOD\Video
     */
    public function setSortStr(int $sortStr)
    {
        return $this->setParameter('sortStr', $sortStr);
    }
}
