<?php

namespace App\Containers\Customer\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Customer\Actions\GetUpCourseAction;
use App\Containers\Customer\UI\API\Requests\GetUpCourseRequest;
use App\Containers\Customer\UI\API\Transformers\GetUpCourseTransformer;
use App\Ship\Parents\Controllers\ApiController;

class GetUpCourseController extends ApiController
{

  public function __invoke(GetUpCourseRequest $request)
  {
        $uid = Apiato::call(GetUpCourseAction::class, [$request->toTransporter()]);
        return $this->transform($uid, GetUpCourseTransformer::class);
  }

}
