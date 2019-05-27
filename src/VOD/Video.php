<?php

namespace Biubiujun\Yunxin\VOD;

use Biubiujun\Yunxin\VOD;

class Video extends VOD
{
    use VOD\Parameters\VideoParameters;

    /**
     * 获取视频文件信息
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function get()
    {
        return $this->request('app/vod/video/get');
    }

    /**
     * 获取视频文件信息列表
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function list()
    {
        return $this->request('app/vod/video/list');
    }

    /**
     * 视频文件信息编辑
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function edit()
    {
        return $this->request('app/vod/video/edit');
    }

    /**
     * 删除单个转码输出视频
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function deleteSingle()
    {
        $this->request('app/vod/video/delete_single');

        return true;
    }

    /**
     * 删除视频源文件
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function videoDelete()
    {
        $this->request('app/vod/video/videoDelete');

        return true;
    }

    /**
     * 视频屏蔽
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function videoDisable()
    {
        $this->request('app/vod/video/videoDisable');

        return true;
    }

    /**
     * 视频恢复
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function videoRecover()
    {
        $this->request('app/vod/video/videoRecover');

        return true;
    }

    /**
     * 批量删除视频
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function delete()
    {
        $this->request('app/vod/video/delete');

        return true;
    }
}
