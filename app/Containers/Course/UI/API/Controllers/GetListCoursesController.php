<?php

namespace App\Containers\Course\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Course\Actions\GetListCoursesAction;
use App\Containers\Course\UI\API\Transformers\CourseTransformer;
use App\Ship\Parents\Controllers\ApiController;

class GetListCoursesController extends ApiController
{

  public function __invoke()
  {
    $courses = Apiato::call(GetListCoursesAction::class);

    return $this->transform($courses, CourseTransformer::class);

  }
}
