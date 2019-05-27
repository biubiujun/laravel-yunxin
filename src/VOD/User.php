<?php

namespace Biubiujun\Yunxin\VOD;

use Biubiujun\Yunxin\VOD;
use Biubiujun\Yunxin\VOD\Parameters\UserParameters;

class User extends VOD
{
    use UserParameters;

    /**
     * 创建终端用户
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function create(): array
    {
        return $this->request('app/vod/thirdpart/user/create');
    }

    /**
     * 更新终端用户
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function update(): array
    {
        return $this->request('app/vod/thirdpart/user/update');
    }

    /**
     * 删除终端用户
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function delete(): bool
    {
        $this->request('app/vod/thirdpart/user/userDelete');

        return true;
    }

    /**
     * 屏蔽终端用户
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function disable(): bool
    {
        $this->request('app/vod/thirdpart/user/userDisable');

        return true;
    }

    /**
     * 恢复终端用户
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function recover(): bool
    {
        $this->request('app/vod/thirdpart/user/userRecover');

        return true;
    }
}
