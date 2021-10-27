<?php

namespace App\Containers\Course\Tasks;

use App\Containers\Course\Data\Repositories\CourseDurationRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindCourseDurationByIdTask extends Task
{

    protected $repository;

    public function __construct(CourseDurationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
