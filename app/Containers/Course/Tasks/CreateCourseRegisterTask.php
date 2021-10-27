<?php

namespace App\Containers\Course\Tasks;

use App\Containers\Course\Data\Repositories\CourseRegisterRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCourseRegisterTask extends Task
{

    protected $repository;

    public function __construct(CourseRegisterRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
