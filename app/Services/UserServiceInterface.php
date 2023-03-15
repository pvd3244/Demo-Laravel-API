<?php

namespace App\Services;

interface UserServiceInterface
{
    public function getUserDetail(int $id);

    public function getUserList(array $params);

    public function deleteUser(int $id);

    public function createUser(array $params);

    public function updateUser(array $params);
}
