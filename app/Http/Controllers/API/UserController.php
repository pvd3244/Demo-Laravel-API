<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserIndexRequest;
use App\Services\UserServiceInterface;

class UserController extends Controller
{
    protected $userService;

    /**
     * Create new instance
     * 
     * @param UserServiceInterface $userService
     */
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Get user detail
     * 
     * @param int $id
     * @return json
     */
    public function getUserDetail(int $id) {
        list($statusCode, $data) = $this->userService->getUserDetail($id);
        return response()->json($data, $statusCode);
    }

    /**
     * Get user list
     * 
     * @param UserIndexRequest $request
     * @return json
     */
    public function getUserList(UserIndexRequest $request)
    {
        list($statusCode, $data) = $this->userService->getUserList($request->all());
        return response()->json($data, $statusCode);
    }

    /**
     * Delete user
     * 
     * @param int $id
     * @return json
     */
    public function deleteUser(int $id)
    {
        list($statusCode, $data) = $this->userService->deleteUser($id);
        return response()->json($data, $statusCode);
    }

    /**
     * Create user
     * 
     * @param CreateUserRequest $request
     * @return json
     */
    public function createUser(CreateUserRequest $request)
    {
        list($statusCode, $data) = $this->userService->createUser($request->all());
        return response()->json($data, $statusCode);
    }

    /**
     * Update user
     * 
     * @param UpdateUserRequest $request
     * @param int $id
     * @return json
     */
    public function updateUser(UpdateUserRequest $request, int $id)
    {
        $params = $request->all();
        $params['id'] = $id;
        list($statusCode, $data) = $this->userService->updateUser($params);
        return response()->json($data, $statusCode);
    }
}
