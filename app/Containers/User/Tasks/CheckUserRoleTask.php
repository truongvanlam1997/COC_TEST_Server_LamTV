<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Exceptions\MessageException;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;

class CheckUserRoleTask extends Task
{

    public function run(User $user,string $role)
    {
      if ( ! $user->hasRole($role)) {
        throw new MessageException('User has not role ' . $role . '!');
      }
    }
}
