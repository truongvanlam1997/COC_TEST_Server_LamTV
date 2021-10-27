<?php

namespace App\Containers\Course\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Course\Tasks\GetAllCourseDurationsTask;

class GetListCourseDurationAction extends Action
{
    public function run()
    {
        $coursedurations = Apiato::call(GetAllCourseDurationsTask::class);
        return $coursedurations;
    }
}
