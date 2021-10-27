<?php

namespace App\Containers\Course\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Course\Actions\GetListCourseDurationAction;
use App\Containers\Course\Actions\GetListCoursesAction;
use App\Containers\Course\UI\API\Transformers\CourseDurationTransformer;
use App\Ship\Parents\Controllers\ApiController;

class GetListCourseDurationsController extends ApiController
{

  public function __invoke()
  {
    $courseDurations = Apiato::call(GetListCourseDurationAction::class);
    return $this->transform($courseDurations, CourseDurationTransformer::class);
  }

}
