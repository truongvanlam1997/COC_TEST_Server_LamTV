<?php

namespace App\Containers\Admin\Actions;

use App\Ship\Parents\Actions\Action;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Authentication\Tasks\GetAuthenticatedUserTask;
use App\Containers\Authentication\Values\JwtToken;
use App\Containers\User\Tasks\CheckUserRoleTask;
use App\Containers\User\Tasks\UserLoginJwtTask;
use App\Ship\Parents\Requests\Request;

class AdminJwtLoginAction extends Action
{
    public function run(Request $request)
    {
        $token = Apiato::call(UserLoginJwtTask::class,[$request->toTransporter()]);
        $user = Apiato::call(GetAuthenticatedUserTask::class);
        $checkRole = Apiato::call(CheckUserRoleTask::class,[$user, 'admin']);

        return new JwtToken($token);

    }
}
