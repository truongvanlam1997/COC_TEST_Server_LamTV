<?php

namespace App\Containers\Admin\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Admin\Actions\RegisterCouserAction;
use App\Containers\Admin\UI\API\Requests\RegisterCourseRequest;
use App\Ship\Parents\Controllers\ApiController;

class RegisterCourseController extends ApiController
{

  public function __invoke(RegisterCourseRequest $request)
  {
    $result = Apiato::call(RegisterCouserAction::class,[$request]);
    return response()->json([
      'message' =>__("Register Success !")
    ]);

  }

}
