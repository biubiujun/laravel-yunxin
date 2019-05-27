<?php

namespace Biubiujun\Yunxin\VOD\Parameters;

trait TranscodeParameters
{
    /**
     * @param array $vids
     * @return \Biubiujun\Yunxin\VOD\Transcode
     */
    public function setVids(array $vids)
    {
        return $this->setParameter('vids', $vids);
    }

    /**
     * @param int $presetId
     * @return \Biubiujun\Yunxin\VOD\Transcode
     */
    public function setPresetId(int $presetId)
    {
        return $this->setParameter('presetId', $presetId);
    }

    /**
     * @param int $watermarkId
     * @return \Biubiujun\Yunxin\VOD\Transcode
     */
    public function setWatermarkId(int $watermarkId)
    {
        return $this->setParameter('watermarkId', $watermarkId);
    }

    /**
     * @param string $userDefInfo
     * @return \Biubiujun\Yunxin\VOD\Transcode
     */
    public function userDefInfo(string $userDefInfo)
    {
        return $this->setParameter('userDefInfo', $userDefInfo);
    }

    /**
     * @param int $transOffset
     * @return \Biubiujun\Yunxin\VOD\Transcode
     */
    public function setTransOffset(int $transOffset)
    {
        return $this->setParameter('transOffset', $transOffset);
    }

    /**
     * @param int $transDuration
     * @return \Biubiujun\Yunxin\VOD\Transcode
     */
    public function setTransDuration(int $transDuration)
    {
        return $this->setParameter('transDuration', $transDuration);
    }

    /**
     * @param array $dynamicTransConfig
     * @return \Biubiujun\Yunxin\VOD\Transcode
     */
    public function setDynamicTransConfig(array $dynamicTransConfig)
    {
        return $this->setParameter('dynamicTransConfig', json_encode($dynamicTransConfig));
    }

    /**
     * @param string $callbackUrl
     * @return \Biubiujun\Yunxin\VOD\Transcode
     */
    public function setCallbackUrl(string $callbackUrl)
    {
        return $this->setParameter('callbackUrl', $callbackUrl);
    }

    /**
     * @param string $signKey
     * @return \Biubiujun\Yunxin\VOD\Transcode
     */
    public function setSignKey(string $signKey)
    {
        return $this->setParameter('signKey', $signKey);
    }
}
