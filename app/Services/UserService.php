<?php

namespace App\Services;

use App\Http\Resources\UserResource;
use App\Jobs\MailSendUserInfoJob;
use App\Mail\MailSendUserInfo;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class UserService implements UserServiceInterface
{
    /**
     * Function get user detail
     * 
     * @param int $id
     * @return array
     */
    public function getUserDetail(int $id)
    {
        $user = User::findOrFail($id);
        return [
            Response::HTTP_OK, 
            [
                'user' => UserResource::make($user),
            ]
        ];
    }

    /**
     * Function get user list
     * 
     * @param array $params
     * @return array
     */
    public function getUserList(array $params)
    {
        $query = User::with([]);

        if (isset($params['name'])) {
            $query->where('name', 'LIKE', '%' . $params['name'] . '%');
        }

        if (isset($params['email'])) {
            $query->where('email', 'like', '%' . $params['email'] . '%');
        }

        $userList = $query->orderByDesc('id')->paginate(10);

        return [
            Response::HTTP_OK,
            [
                'users' => UserResource::collection($userList),
                'pageInfo' => pageInfo($userList),
            ]
        ];
    }

    /**
     * Delete user
     * 
     * @param int $id
     * @return array
     */
    public function deleteUser(int $id)
    {
        User::findOrFail($id)->delete();
        return [Response::HTTP_OK, []];
    }

    /**
     * Create user
     * 
     * @param array $params
     * @return array
     */
    public function createUser(array $params)
    {
        try {
            $user = User::create([
                'name' => $params['name'],
                'email' => $params['email'],
                'password' => \Hash::make($params['password']),
            ]);
        } catch (\Throwable $th) {
            \Log::error($th);
            return [Response::HTTP_INTERNAL_SERVER_ERROR, ['message' => 'Loi he thong']];
        }
        MailSendUserInfoJob::dispatch($user);
        return [Response::HTTP_CREATED, []];
    }

    /**
     * Update user
     * 
     * @param array $params
     * @return array
     */
    public function updateUser(array $params)
    {
        try {
            User::findOrFail($params['id'])->update([
                'name' => $params['name'],
                'email' => $params['email'],
                'password' => \Hash::make($params['password']),
            ]);
        } catch (\Throwable $th) {
            \Log::error($th);
            return [Response::HTTP_INTERNAL_SERVER_ERROR, ['message' => 'Loi he thong']];
        }
        return [Response::HTTP_OK, []];
    }
}