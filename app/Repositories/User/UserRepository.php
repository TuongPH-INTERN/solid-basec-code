<?php

namespace App\Repositories;

use App\Interfaces\User\UserRepositoryInterface;
use App\Models\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function findByEmail($email)
    {
        return $this->model->where('email', $email)->first();
    }
}
