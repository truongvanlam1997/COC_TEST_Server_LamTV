<?php

namespace App\Containers\Admin\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Admin\Actions\AdminJwtLoginAction;
use App\Containers\Admin\UI\API\Requests\AdminLoginRequest;
use App\Containers\Authentication\UI\API\Transformers\JwtTokenTransformer;
use App\Containers\User\UI\API\Requests\UserLoginRequest;
use App\Ship\Parents\Controllers\ApiController;

class AdminLoginController extends ApiController
{

  public function __invoke(UserLoginRequest $request)
  {
      $jwtToken = Apiato::call(AdminJwtLoginAction::class,[$request]);
      return $this->transform($jwtToken, JwtTokenTransformer::class);

  }

}
