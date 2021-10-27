<?php

namespace App\Containers\Course\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Course\Tasks\GetAllCoursesTask;

class GetListCoursesAction extends Action
{
    public function run()
    {
        $courses = Apiato::call(GetAllCoursesTask::class);

        return $courses;
    }
}
