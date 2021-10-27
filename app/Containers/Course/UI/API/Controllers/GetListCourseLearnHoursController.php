<?php

namespace App\Containers\Course\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Course\Actions\GetListCourseLearnHourAction;
use App\Containers\Course\UI\API\Transformers\CourseLearnHourTransformer;
use App\Ship\Parents\Controllers\ApiController;

class GetListCourseLearnHoursController extends ApiController
{

  public function __invoke()
  {
      $courseLearnHours = Apiato::call(GetListCourseLearnHourAction::class);
      return $this->transform($courseLearnHours, CourseLearnHourTransformer::class);
  }

}
