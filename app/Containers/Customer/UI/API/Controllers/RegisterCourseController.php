<?php

namespace App\Containers\Customer\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Customer\Actions\RegisterCourseAction;
use App\Containers\Customer\UI\API\Requests\RegisterCourseRequest;
use App\Ship\Parents\Controllers\ApiController;

class RegisterCourseController extends ApiController
{
    public function __invoke(string $uid, RegisterCourseRequest $request)
    {
        $result = Apiato::call(RegisterCourseAction::class, [$uid, $request->toTransporter()]);
        return response()->json(
            [
              'code' => 0,
              'message' => "Register Course Success"
            ]
          );
    }
}
