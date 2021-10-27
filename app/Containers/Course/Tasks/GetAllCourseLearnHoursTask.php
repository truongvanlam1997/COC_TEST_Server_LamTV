<?php

namespace App\Containers\Course\Tasks;

use App\Containers\Course\Data\Repositories\CourseLearnHourRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCourseLearnHoursTask extends Task
{

    protected $repository;

    public function __construct(CourseLearnHourRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->get();
    }
}
