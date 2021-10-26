<?php

namespace App\Containers\Admin\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Admin\Actions\AdminJwtLoginAction;
use App\Containers\Admin\UI\API\Requests\AdminLoginRequest;
use App\Ship\Parents\Controllers\ApiController;

class AdminLoginController extends ApiController
{

  public function __invoke(AdminLoginRequest $request)
  {
      $jwtToken = Apiato::call(AdminJwtLoginAction::class,[$request]);

      dd($jwtToken);
      dd(123);
  }

}
