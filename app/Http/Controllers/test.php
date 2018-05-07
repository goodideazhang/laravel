<?php


class user
{
    public $userId;

    public function setUserId($id)
    {
        $this->userId = $id;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function getUserInfo()
    {
        return '这里是根据userId获取的用户信息' . $this->userId;
    }
}