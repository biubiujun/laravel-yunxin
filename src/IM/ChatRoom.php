<?php

namespace Biubiujun\Yunxin\IM;

use Biubiujun\Yunxin\IM;
use Biubiujun\Yunxin\IM\Parameters\ChatRoomParameters;

class ChatRoom extends IM
{
    use ChatRoomParameters;

    /**
     * 创建聊天室
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function create(): array
    {
        $response = $this->request('chatroom/create.action');

        return $response['chatroom'];
    }

    /**
     * 查询聊天室信息
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function get(): array
    {
        $response = $this->request('chatroom/get.action');

        return $response['chatroom'];
    }

    /**
     * 批量查询聊天室信息
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function getBatch(): array
    {
        $response = $this->request('chatroom/getBatch.action');

        return $response;
    }

    /**
     * 更新聊天室信息
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function update(): array
    {
        $response = $this->request('chatroom/update.action');

        return $response['chatroom'];
    }

    /**
     * 修改聊天室开/关闭状态
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function toggleCloseStat(): array
    {
        $response = $this->request('chatroom/toggleCloseStat.action');

        return $response['chatroom'];
    }

    /**
     * 设置聊天室内用户角色
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function setMemberRole(): array
    {
        $response = $this->request('chatroom/setMemberRole.action');

        return $response['desc'];
    }

    /**
     * 请求聊天室地址
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function requestAddr(): array
    {
        $response = $this->request('chatroom/requestAddr.action');

        return $response['addr'];
    }

    /**
     * 发送聊天室消息
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function sendMsg(): array
    {
        $response = $this->request('chatroom/sendMsg.action');

        return $response['desc'];
    }

    /**
     * 往聊天室内添加机器人
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function addRobot(): array
    {
        $response = $this->request('chatroom/addRobot.action');

        return $response['desc'];
    }

    /**
     * 从聊天室内删除机器人
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function removeRobot(): array
    {
        $response = $this->request('chatroom/removeRobot.action');

        return $response['desc'];
    }

    /**
     * 设置临时禁言状态
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function temporaryMute(): array
    {
        $response = $this->request('chatroom/temporaryMute.action');

        return $response['desc'];
    }

    /**
     * 往聊天室有序队列中新加或更新元素
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function queueOffer(): array
    {
        $response = $this->request('chatroom/queueOffer.action');

        return $response['desc'];
    }

    /**
     * 从队列中取出元素
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function queuePoll(): array
    {
        $response = $this->request('chatroom/queuePoll.action');

        return $response['desc'];
    }

    /**
     * 排序列出队列中所有元素
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function queueList(): array
    {
        $response = $this->request('chatroom/queueList.action');

        return $response['desc'];
    }

    /**
     * 删除清理整个队列
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function queueDrop(): array
    {
        $response = $this->request('chatroom/queueDrop.action');

        return $response['desc'];
    }

    /**
     * 初始化队列
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function queueInit(): array
    {
        $response = $this->request('chatroom/queueInit.action');

        return $response['desc'];
    }

    /**
     * 将聊天室整体禁言
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function muteRoom(): array
    {
        $response = $this->request('chatroom/muteRoom.action');

        return $response['desc'];
    }

    /**
     * 查询聊天室统计指标TopN
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function topn(): array
    {
        $response = $this->request('chatroom/topn.action');

        return $response['data'];
    }

    /**
     * 分页获取成员列表
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function membersByPage(): array
    {
        $response = $this->request('chatroom/membersByPage.action');

        return $response['desc'];
    }

    /**
     * 批量获取在线成员信息
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function queryMembers(): array
    {
        $response = $this->request('chatroom/queryMembers.action');

        return $response['desc'];
    }

    /**
     * 变更聊天室内的角色信息
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function updateMyRoomRole(): bool
    {
        $this->request('chatroom/updateMyRoomRole.action');

        return true;
    }

    /**
     * 批量更新聊天室队列元素
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function queueBatchUpdateElements(): bool
    {
        $response = $this->request('chatroom/queueBatchUpdateElements.action');

        return $response['desc'];
    }

    /**
     * 查询用户创建的开启状态聊天室列表
     *
     * @return bool
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function queryUserRoomIds(): bool
    {
        $response = $this->request('chatroom/queryUserRoomIds.action');

        return $response['desc'];
    }
}
