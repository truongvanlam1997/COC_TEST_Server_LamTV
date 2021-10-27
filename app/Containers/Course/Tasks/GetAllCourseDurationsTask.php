<?php

namespace App\Containers\Course\Tasks;

use App\Containers\Course\Data\Repositories\CourseDurationRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCourseDurationsTask extends Task
{

    protected $repository;

    public function __construct(CourseDurationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->get();
    }
}
