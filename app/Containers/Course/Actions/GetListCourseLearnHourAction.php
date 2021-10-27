<?php

namespace App\Containers\Course\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Course\Tasks\GetAllCourseLearnHoursTask;

class GetListCourseLearnHourAction extends Action
{
    public function run()
    {
        $courseLearnHours = Apiato::call(GetAllCourseLearnHoursTask::class);
        return $courseLearnHours;
    }
}
