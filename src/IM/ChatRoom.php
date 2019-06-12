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
        return $this->request('chatroom/create.action');
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
        return $this->request('chatroom/get.action');
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
        return $this->request('chatroom/getBatch.action');
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
        return $this->request('chatroom/update.action');
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
        return $this->request('chatroom/toggleCloseStat.action');
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
        return $this->request('chatroom/setMemberRole.action');
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
        return $this->request('chatroom/requestAddr.action');
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
        return $this->request('chatroom/sendMsg.action');
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
        return $this->request('chatroom/addRobot.action');
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
        return $this->request('chatroom/removeRobot.action');
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
        return $this->request('chatroom/temporaryMute.action');
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
        return $this->request('chatroom/queueOffer.action');
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
        return $this->request('chatroom/queuePoll.action');
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
        return $this->request('chatroom/queueList.action');
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
        return $this->request('chatroom/queueDrop.action');
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
        return $this->request('chatroom/queueInit.action');
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
        return $this->request('chatroom/muteRoom.action');
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
        return $this->request('chatroom/topn.action');
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
        return $this->request('chatroom/membersByPage.action');
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
        return $this->request('chatroom/queryMembers.action');
    }

    /**
     * 变更聊天室内的角色信息
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function updateMyRoomRole(): array
    {
        $this->request('chatroom/updateMyRoomRole.action');

        return true;
    }

    /**
     * 批量更新聊天室队列元素
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function queueBatchUpdateElements(): array
    {
        return $this->request('chatroom/queueBatchUpdateElements.action');
    }

    /**
     * 查询用户创建的开启状态聊天室列表
     *
     * @return array
     * @throws \Biubiujun\Yunxin\Exceptions\HttpException
     * @throws \Biubiujun\Yunxin\Exceptions\InvalidResponseException
     */
    public function queryUserRoomIds(): array
    {
        return $this->request('chatroom/queryUserRoomIds.action');
    }
}
