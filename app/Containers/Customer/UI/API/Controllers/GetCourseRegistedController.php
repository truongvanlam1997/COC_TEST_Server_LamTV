<?php

namespace App\Containers\Customer\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Course\UI\API\Transformers\CourseRegisterInfoTransformer;
use App\Containers\Customer\Actions\GetCouserRegistedAction;
use App\Ship\Parents\Controllers\ApiController;

class GetCourseRegistedController extends ApiController
{

  public function __invoke(string $uid)
  {
    $courseRegister = Apiato::call(GetCouserRegistedAction::class, [$uid]);
    return $this->transform($courseRegister, CourseRegisterInfoTransformer::class);

  }

}
